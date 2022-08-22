<?php

namespace App\Http\Controllers\Admin;

use App\Tag;
use App\Post;
use App\Photo;
use App\Comment;
use App\Category;
use App\BlogSingleSetting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('admin.post.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.post.create')->withCategories(Category::all())->withTags(Tag::all());
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        $blogsinglesetting =  BlogSingleSetting::first();
        $latestPosts = Post::latest()->limit($blogsinglesetting->recent_post_item)->get();
        return view('front.single-blog', compact('post', 'latestPosts', 'blogsinglesetting'))->withCategories(Category::all())->withTags(Tag::all());
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'tags' => 'required',
            'category' => 'required',
            'image' => 'required',
        ]);


        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        $input = $request->except('image');

        if ($file = $request->image) {

            $name = time() . '_' . $file->getClientOriginalName();

            $file->storeAs('public/posts', $name);

            $photo = Photo::create(['file' => $name]);

            $input['photo_id'] = $photo->id;
        }

        $input['user_id'] = Auth::user()->id;

        $input['category_id'] = $request->category;

        $post = Post::create($input);

        if ($request->tags) {
            $post->tags()->attach($request->tags);
        }


        return redirect(route('posts.index'))->with('success', 'Service created successfully');
    }

    public function edit($id)
    {
        $post = Post::FindOrFail($id);
        return view('admin.post.create', compact('post'))->withCategories(Category::all())->withTags(Tag::all());
    }


    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'tags' => 'required',
            'category' => 'required',
        ]);


        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        $post = Post::findOrFail($id);

        $input = $request->except('image');

        if ($file = $request->image) {

            Storage::delete('public/posts/' . $post->photo->file);

            $name = time() . '_' . $file->getClientOriginalName();

            $file->storeAs('public/posts', $name);

            $post->photo()->update(['file' => $name]);
        }

        $input['user_id'] = Auth::user()->id;

        $input['category_id'] = $request->category;

        if ($request->tags) {
            $post->tags()->sync($request->tags);
        }

        $post->update($input);

        return redirect(route('posts.index'))->with('success', 'Post updated successfully');
    }


    public function destroy($id)
    {
        $post = Post::FindOrFail($id);

        if (isset($post->photo)) {
            Storage::delete('public/posts/' . $post->photo->file);
        }

        $post->photo()->delete();
        $post->delete();

        return redirect(route('posts.index'))->with('toast_warning', 'Post deleted successfully ');
    }
}

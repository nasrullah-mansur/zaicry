<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('admin.user.index', compact('users'));
    }

    public function create()
    {
        return view('admin.user.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        User::create($request->all());

        return redirect(route('user.index'))->with('success', 'User created successfully');
    }

    public function edit($id)
    {
        $users = User::FindOrFail($id);

        return view('admin.user.create', compact('users'));
    }


    public function update(Request $request, $id)
    {

        if ($request->password) {
            $validator = Validator::make($request->all(), [
                'name' => ['required', 'string', 'max:255'],
                'email' => 'sometimes|required|email|unique:users,email,' . $id,
                'password' => 'sometimes|string|min:8', 'confirmed',
            ]);
        } else {
            $validator = Validator::make($request->all(), [
                'name' => ['required', 'string', 'max:255'],
                'email' => 'sometimes|required|email|unique:users,email,' . $id,
            ]);
        }


        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        $users = User::FindOrFail($id);

        $users->update($request->all());

        return redirect(route('user.index'))->with('success', 'User updated successfully');
    }


    public function destroy($id)
    {
        if (Auth::user()->id == $id) {
            return redirect()->back();
        }
        $users = User::FindOrFail($id);
        $users->delete();


        return redirect(route('user.index'))->with('toast_warning', 'User deleted successfully ');
    }
}

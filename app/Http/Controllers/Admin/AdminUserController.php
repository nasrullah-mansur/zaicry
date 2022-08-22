<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AdminUserController extends Controller
{
    public function index()
    {
        $users = User::where('role', 'admin')->get();

        return view('admin.adminuser.index', compact('users'));
    }

    public function create()
    {
        if (Auth::user()->role == 'admin') {
            return view('admin.adminuser.create');
        } else {
            return redirect()->back();
        }
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
        if (Auth::user()->role == 'admin') {
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'role' => 'admin'
            ]);
        } else {
            return redirect()->back();
        }
        return redirect(route('adminuser.index'))->with('success', 'Admin created successfully');
    }

    public function edit($id)
    {
        $users = User::FindOrFail($id);

        return view('admin.adminuser.create', compact('users'));
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
                'password' => 'required',
            ]);
        }

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }
        if (Auth::user()->role == 'admin') {
            $users = User::FindOrFail($id);

            $users->update($request->all());
        } else {
            return redirect()->back();
        }
        return redirect(route('adminuser.index'))->with('success', 'User updated successfully');
    }


    public function destroy($id)
    {
        if (Auth::user()->id == $id) {
            return redirect()->back();
        }
        $users = User::FindOrFail($id);
        $users->delete();


        return redirect(route('adminuser.index'))->with('toast_warning', 'User deleted successfully ');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\StoreRequest;
use App\Http\Requests\Admin\User\UpdateRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index () {
        $users = DB::table('users')->orderBy('created_at', 'DESC')->get();

        return view('admin.user.index', ['users' => $users]);
    }

    /**
     * Show form for create user
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Processing push data to table
     */
    public function store (StoreRequest $Request) {
        $data = $Request->except('_token', 'password_confirmation');
        $data['password'] = bcrypt($Request->password);
        $data['created_at'] = new \DateTime;

        if ($Request->image) {
            $file = $Request->image;
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('image/user'), $filename);
            $data['image'] = $filename;
        }

        DB::table('users')->insert($data);

        return redirect()->route('admin.user.index')->with('success','User created successfully');
    }

    /**
     * Show form for edit user
     */
    public function edit($id)
    {
        $user = DB::table('users')->where('id', $id)->first();

        return view('admin.user.edit', ['user' => $user]);
    }

    /**
     * Processing update data from table
     */
    public function update(UpdateRequest $Request, $id)
    {
        // $data = $Request->except('_token', 'password_confirmation', 'password');
        // if (!empty($Request->password)) {
        //     $Request->validate([
        //         'password' => 'min:8|confirmed',
        //     ], [
        //         'password.min' => 'Mat khau phai co it nhat 8 ky tu',
        //         'password.confirmed' => 'Mat khau khong trung khop',
        //     ]);
        //     $data['password'] = bcrypt($Request->password);
        // }
        $data = $Request->except('_token', 'password_confirmation');
        $data['password'] = bcrypt($Request->password);
        $data['updated_at'] = new \DateTime;

        if (!empty($Request->image)) {
            $user = DB::table('users')->where('id', $id)->first();
            if (file_exists(public_path('image/user/') . $user->image)) {
                unlink(public_path('image/user/') . $user->image);
            }

            $file = $Request->image;
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('image/user'), $filename);
            $data['image'] = $filename;
        }

        DB::table('users')->where('id', $id)->update($data);

        return redirect()->route('admin.user.index')->with('success', 'User updated successfully');
    }

    /**
     * Delete a user
     */
    public function remove($id)
    {
        $user = DB::table('users')->where('id', $id)->first();
        if (file_exists(public_path('image/user/') . $user->image)) {
            unlink(public_path('image/user/') . $user->image);
        }

        DB::table('users')->where('id', $id)->delete();
        return redirect()->route('admin.user.index')->with('success', 'User remove successfully');
    }
}

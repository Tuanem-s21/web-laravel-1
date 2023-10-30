<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Client\StoreRequest;
use App\Http\Requests\Admin\Client\UpdateRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index () {
        $clients = DB::table('clients')->orderBy('created_at', 'DESC')->get();

        return view('admin.client.index', ['clients' => $clients]);
    }

    /**
     * Show form for create client
     */
    public function create()
    {
        return view('admin.client.create');
    }

    /**
     * Processing push data to table
     */
    public function store (StoreRequest $Request) {
        $data = $Request->except('_token', 'password_confirmation');
        $data['password'] = bcrypt($Request->password);
        $data['created_at'] = new \DateTime;
        $data['user_id'] = 1;

        if ($Request->image) {
            $file = $Request->image;
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('image/client'), $filename);
            $data['image'] = $filename;
        }

        DB::table('clients')->insert($data);

        return redirect()->route('admin.client.index')->with('success','client created successfully');
    }

    /**
     * Show form for edit client
     */
    public function edit($id)
    {
        $client = DB::table('clients')->where('id', $id)->first();

        return view('admin.client.edit', ['client' => $client]);
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
        $data['user_id'] = 1;

        if (!empty($Request->image)) {
            $client = DB::table('clients')->where('id', $id)->first();
            if (file_exists(public_path('image/client/') . $client->image)) {
                unlink(public_path('image/client/') . $client->image);
            }

            $file = $Request->image;
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('image/client'), $filename);
            $data['image'] = $filename;
        }

        DB::table('clients')->where('id', $id)->update($data);

        return redirect()->route('admin.client.index')->with('success', 'client updated successfully');
    }

    /**
     * Delete a client
     */
    public function remove($id)
    {
        $client = DB::table('clients')->where('id', $id)->first();
        if (file_exists(public_path('image/client/') . $client->image)) {
            unlink(public_path('image/client/') . $client->image);
        }

        DB::table('clients')->where('id', $id)->delete();
        return redirect()->route('admin.client.index')->with('success', 'client remove successfully');
    }
}

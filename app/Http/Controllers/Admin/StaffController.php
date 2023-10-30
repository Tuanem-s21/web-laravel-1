<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Staff\StoreRequest;
use App\Http\Requests\Admin\Staff\UpdateRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index () {
        $staffs = DB::table('staffs')->orderBy('created_at')->get();

        return view('admin.staff.index', ['staffs' => $staffs]);
    }

    /**
     * Show form for create staff
     */
    public function create()
    {
        return view('admin.staff.create');
    }

    /**
     * Processing push data to table
     */
    public function store (StoreRequest $Request) {
        $data = $Request->except('_token');
        $data['created_at'] = new \DateTime;
        $data['user_id'] = 1;

        if ($Request->image) {
            $file = $Request->image;
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('image/staff'), $filename);
            $data['image'] = $filename;
        }

        DB::table('staffs')->insert($data);

        return redirect()->route('admin.staff.index')->with('success','staff created successfully');
    }

    /**
     * Show form for edit staff
     */
    public function edit($id)
    {
        $staff = DB::table('staffs')->where('id', $id)->first();

        return view('admin.staff.edit', ['staff' => $staff]);
    }

    /**
     * Processing update data from table
     */
    public function update(UpdateRequest $Request, $id)
    {
        $data = $Request->except('_token');
        $data['updated_at'] = new \DateTime;
        $data['user_id'] = 1;

        if (!empty($Request->image)) {
            $staff = DB::table('staffs')->where('id', $id)->first();
            if (file_exists(public_path('image/staff/') . $staff->image)) {
                unlink(public_path('image/staff/') . $staff->image);
            }

            $file = $Request->image;
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('image/staff'), $filename);
            $data['image'] = $filename;
        }

        DB::table('staffs')->where('id', $id)->update($data);

        return redirect()->route('admin.staff.index')->with('success', 'staff updated successfully');
    }

    /**
     * Delete a staff
     */
    public function remove($id)
    {

        $staff = DB::table('staffs')->where('id', $id)->first();
        if (file_exists(public_path('image/staff/') . $staff->image)) {
            unlink(public_path('image/staff/') . $staff->image);
        }

        DB::table('staffs')->where('id', $id)->delete();
        return redirect()->route('admin.staff.index')->with('success', 'staff remove successfully');
    }
}

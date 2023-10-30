<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Voucher\StoreRequest;
use App\Http\Requests\Admin\Voucher\UpdateRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class VoucherController extends Controller
{
    public function index () {
        $vouchers = DB::table('vouchers')->orderBy('created_at')->get();

        return view('admin.voucher.index', ['vouchers' => $vouchers]);
    }

    /**
     * Show form for create voucher
     */
    public function create()
    {
        return view('admin.voucher.create');
    }

    /**
     * Processing push data to table
     */
    public function store (StoreRequest $Request) {
        $data = $Request->except('_token');
        $data['created_at'] = new \DateTime;
        // $data['user_id'] = 1;

        if ($Request->image) {
            $file = $Request->image;
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('image/voucher'), $filename);
            $data['image'] = $filename;
        }

        DB::table('vouchers')->insert($data);

        return redirect()->route('admin.voucher.index')->with('success','voucher created successfully');
    }

    /**
     * Show form for edit voucher
     */
    public function edit($id)
    {
        $voucher = DB::table('vouchers')->where('id', $id)->first();

        return view('admin.voucher.edit', ['voucher' => $voucher]);
    }

    /**
     * Processing update data from table
     */
    public function update(UpdateRequest $Request, $id)
    {
        $data = $Request->except('_token');
        $data['updated_at'] = new \DateTime;
        // $data['user_id'] = 1;

        if (!empty($Request->image)) {
            $voucher = DB::table('vouchers')->where('id', $id)->first();
            if (file_exists(public_path('image/voucher/') . $voucher->image)) {
                unlink(public_path('image/voucher/') . $voucher->image);
            }

            $file = $Request->image;
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('image/voucher'), $filename);
            $data['image'] = $filename;
        }

        DB::table('vouchers')->where('id', $id)->update($data);

        return redirect()->route('admin.voucher.index')->with('success', 'voucher updated successfully');
    }

    /**
     * Delete a voucher
     */
    public function remove($id)
    {

        $voucher = DB::table('vouchers')->where('id', $id)->first();
        if (file_exists(public_path('image/voucher/') . $voucher->image)) {
            unlink(public_path('image/voucher/') . $voucher->image);
        }

        DB::table('vouchers')->where('id', $id)->delete();
        return redirect()->route('admin.voucher.index')->with('success', 'voucher remove successfully');
    }
}

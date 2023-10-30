<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Service\StoreRequest;
use App\Http\Requests\Admin\Service\UpdateRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index () {
        $services = DB::table('services')->orderBy('created_at')->get();

        return view('admin.service.index', ['services' => $services]);
    }

    /**
     * Show form for create service
     */
    public function create()
    {
        $categories = DB::table('categories')->get();

        return view('admin.service.create', ['categories' => $categories]);
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
            $file->move(public_path('image/service'), $filename);
            $data['image'] = $filename;
        }

        DB::table('services')->insert($data);

        return redirect()->route('admin.service.index')->with('success','service created successfully');
    }

    /**
     * Show form for edit service
     */
    public function edit($id)
    {
        $service = DB::table('services')->where('id', $id)->first();

        return view('admin.service.edit', ['service' => $service],['categories' => $category]);
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
            $service = DB::table('services')->where('id', $id)->first();
            if (file_exists(public_path('image/service/') . $service->image)) {
                unlink(public_path('image/service/') . $service->image);
            }

            $file = $Request->image;
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('image/service'), $filename);
            $data['image'] = $filename;
        }

        $categories = DB::table('categories')->get();

        DB::table('services')->where('id', $id)->update($data);

        return redirect()->route('admin.service.index')->with('success', 'service updated successfully');
    }

    /**
     * Delete a service
     */
    public function remove($id)
    {

        $service = DB::table('services')->where('id', $id)->first();
        if (file_exists(public_path('image/service/') . $service->image)) {
            unlink(public_path('image/service/') . $service->image);
        }

        DB::table('services')->where('id', $id)->delete();
        return redirect()->route('admin.service.index')->with('success', 'service remove successfully');
    }
}

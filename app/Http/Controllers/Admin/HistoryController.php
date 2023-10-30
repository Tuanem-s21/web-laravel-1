<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function index()
    {
        return view('admin.history.index');
    }

    /**
     * Show form for create history
     */
    public function create()
    {
        return view('admin.history.create');
    }

    /**
     * Processing push data to table
     */
    public function store(StoreRequest $request)
    {
        echo('store history');
    }

    /**
     * Show form for edit history
     */
    public function edit($id)
    {
        return view('admin.history.edit');
    }

    /**
     * Processing update data from table
     */
    public function update(UpdateRequest $request, $id)
    {
        echo('update history');
    }

    /**
     * Delete a history
     */
    public function destroy($id = '')
    {
        echo('delete history');
    }
}

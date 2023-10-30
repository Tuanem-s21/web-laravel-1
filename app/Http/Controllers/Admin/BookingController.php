<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Booking\StoreRequest;
use App\Http\Requests\Admin\Booking\UpdateRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        // $bookings = DB::table('bookings')->orderBy('created_at','DESC')->get();
        // $staffs = DB::table('staffs')->get();
        // $clients = DB::table('clients')->get();
        // $services = DB::table('services')->get();

        $bookings = DB::table('bookings')
        ->join('staffs','staffs.id','=','bookings.staff_id')
        ->join('clients','clients.id','=','bookings.client_id')
        ->join('services','services.id','=','bookings.service_id')
        ->select('bookings.*','staffs.firstname as staffFirst','staffs.lastname as staffLast','clients.firstname as clientFirst','clients.lastname as clientLast','clients.email as clientEmail','clients.phone as clientPhone','services.name as serviceName','services.price as servicePrice')
        ->get();

 

        return view('admin.booking.index', ['bookings' => $bookings]);
    }

    /**
     * Show form for create booking
     */
    public function create()
    {
        $clients = DB::table('clients')->get();
        $services = DB::table('services')->get();
        $staffs = DB::table('staffs')->get();
        
        return view('admin.booking.create', ['clients'=>$clients, 'services'=>$services, 'staffs'=>$staffs]);
    }

    /**
     * Processing push data to table
     */
    public function store(StoreRequest $request)
    {
        $data = $request->except('_token');
        $data['created_at'] = new \DateTime;

        DB::table('bookings')->insert($data);

        return redirect()->route('admin.booking.index')->with('success', 'booking created successfully');
    }

    /**
     * Show form for edit booking
     */
    public function edit($id)
    {
        $clients = DB::table('clients')->get();
        $services = DB::table('services')->get();
        $staffs = DB::table('staffs')->get();

        $booking = DB::table('bookings')->where('id', $id)->first();

        return view('admin.booking.edit', [
            'booking' => $booking,
            'clients' => $clients,
            'services' => $services,
            'staffs' => $staffs,
        ]);
    }

    /**
     * Processing update data from table
     */
    public function update(UpdateRequest $request, $id)
    {
        $data = $request->except('_token', 'image');
        $data['created_at'] = new \DateTime;

        $clients = DB::table('clients')->get();
        $services = DB::table('services')->get();
        $staffs = DB::table('staffs')->get();

        DB::table('bookings')->where('id', $id)->update($data);
        return redirect()->route('admin.booking.index')->with('success', 'booking updated successfully');
    }

    /**
     * Delete a booking
     */
    public function remove($id)
    {

        DB::table('bookings')->where('id', $id)->delete();

        return redirect()->route('admin.booking.index')->with('success', 'booking deleted successfully');
    }
}

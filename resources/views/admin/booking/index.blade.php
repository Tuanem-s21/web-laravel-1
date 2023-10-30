@extends('admin.master')

@section('title', '| Booking')

@section('content-main')

{{-- <h1>index Booking</h1> --}}
<div class="wrapper">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables Booking</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/dashboard1">Home</a></li>
              <li class="breadcrumb-item active">DataTables Booking</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <!-- /.card-header -->
                            <div class="card-body">
                                <a type="button" href="{{ route('admin.booking.create') }}" class="btn btn-primary mb-2"
                                    href="">Create</a>
                                <table id="example1" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name Service</th>
                                            <th>Price</th>
                                            <th>Name Staff</th>
                                            <th>Name client</th>
                                            <th>Email client</th>
                                            <th>Phone client</th>
                                            <th>Date Booking</th>
                                            <th>Note</th>
                                            <th>Arrival Day</th>
                                            <th colspan="2">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($bookings as $booking)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                
                                                  <td>{{ $booking->serviceName }}</td>
                                                  <td>{{ number_format($booking->servicePrice,0, "", ".") }} VND</td>

                                                  <td>{{ $booking->staffFirst }} {{ $booking->staffLast }}</td>

                                                  <td>{{ $booking->clientFirst }} {{ $booking->clientLast }}</td>
                                                  <td>{{ $booking->clientEmail }}</td>
                                                  <td>{{ $booking->clientPhone }}</td>

                                                <td>{{ $booking->date }}</td>
                                                <td>{{ $booking->note }}</td>
                                                <td>{{ $booking->created_at }}</td>

                                                <td class="d-flex">
                                                    <!-- <a type="button"
                                                        href="{{ route('admin.booking.edit', ['id' => $booking->id]) }}"
                                                        class="btn btn-info mx-2">edit</a> -->
                                                    <a type="button" onClick="return confirmDelete ()"
                                                        href="{{ route('admin.booking.remove', ['id' => $booking->id]) }}"
                                                        class="btn btn-warning">delete</a>
                                                </td>
                                                </tr>
                                        @endforeach
                                      </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
        </section>
  </div>
  <!-- /.content-wrapper -->

@endsection
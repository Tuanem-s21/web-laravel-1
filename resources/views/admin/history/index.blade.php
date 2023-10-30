@extends('admin.master')

@section('title', '| History')

@section('content-main')

<div class="wrapper">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables history</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/dashboard1">Home</a></li>
              <li class="breadcrumb-item active">DataTables history</li>
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
                                <a type="button" href="{{ route('admin.history.create') }}" class="btn btn-primary mb-2"
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
                                            <th>Date history</th>
                                            <th>Note</th>
                                            <th>Arrival Day</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($histories as $history)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                
                                                @foreach ($services as $service)
                                                  <td>{{ $service->name }}</td>
                                                  <td>{{ number_format($service->price,0, "", ".") }} VND</td>
                                                @endforeach

                                                @foreach ($staffs as $staff)
                                                  <td>{{ $staff->firstname }}</td>
                                                @endforeach

                                                @foreach ($clients as $client)
                                                  <td>{{ $client->firstname }} {{ $client->lastname }}</td>
                                                  <td>{{ $client->email }}</td>
                                                  <td>{{ $client->phone }}</td>
                                                @endforeach

                                                <td>{{ $history->date }}</td>
                                                <td>{{ $history->note }}</td>
                                                <td>{{ $history->created_at }}</td>
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
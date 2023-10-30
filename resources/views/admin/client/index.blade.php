@extends('admin.master')

@section('title', '| Client')

@section('content-main')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>DataTables Client</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/dashboard1">Home</a></li>
                            <li class="breadcrumb-item active">DataTables Client</li>
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
                                <a type="button" href="{{ route('admin.client.create') }}" class="btn btn-primary mb-2"
                                    href="">Create</a>
                                <table id="example1" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Image</th>
                                            <th>FirstName</th>
                                            <th>LastName</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th colspan="2">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($clients as $client)
                                            <tr>
                                                @php
                                                  $avata = $client->image == null || !file_exists(public_path('image/client/'. $client->image))  ?  'https://www.salonlfc.com/wp-content/uploads/2018/01/image-not-found-1-scaled.png' : asset('image/client/'. $client->image)
                                                @endphp
                                                <td>{{ $loop->iteration }}</td>
                                                <td><img src="{{ $avata }}" alt="" width="100"></td>
                                                <td>{{ $client->firstname }}</td>
                                                <td>{{ $client->lastname }}</td>
                                                <td>{{ $client->email }}</td>
                                                <td>{{ $client->phone }}</td>
                                                <td class="d-flex">
                                                    <a type="button"
                                                        href="{{ route('admin.client.edit', ['id' => $client->id]) }}"
                                                        class="btn btn-info mx-2">edit</a>
                                                    <a type="button" onClick="return confirmDelete ()"
                                                        href="{{ route('admin.client.remove', ['id' => $client->id]) }}"
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
@endsection

@extends('admin.master')

@section('title', '| Service')

@section('content-main')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>DataTables Service</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/dashboard1">Home</a></li>
                            <li class="breadcrumb-item active">DataTables Service</li>
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
                                <a type="button" href="{{ route('admin.service.create') }}" class="btn btn-primary mb-2"
                                    href="">Create</a>
                                <table id="example1" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Intro</th>
                                            <th>Price</th>
                                            <th>Status</th>
                                            <th colspan="2">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($services as $service)
                                            <tr>
                                            @php
                                                  $picture = $service->image == null || !file_exists(public_path('image/service/'. $service->image))  ?  'https://www.salonlfc.com/wp-content/uploads/2018/01/image-not-found-1-scaled.png' : asset('image/service/'. $service->image)
                                                @endphp
                                                <td>{{ $loop->iteration }}</td>
                                                <td><img src="{{ $picture }}" alt="" width="100"></td>
                                                <td>{{ $service->name }}</td>
                                                <td>{{ $service->intro }}</td>
                                                <td>{{ number_format($service->price,0, "", ".") }} VND</td>
                                                <td>{{ $service->status == 1 ? "Active" : "Block" }}</td>
                                                <td class="d-flex">
                                                    <a type="button"
                                                        href="{{ route('admin.service.edit', ['id' => $service->id]) }}"
                                                        class="btn btn-info mx-2">edit</a>
                                                    <a type="button" onClick="return confirmDelete ()"
                                                        href="{{ route('admin.service.remove', ['id' => $service->id]) }}"
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

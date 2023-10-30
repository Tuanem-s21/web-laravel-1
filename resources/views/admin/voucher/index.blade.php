@extends('admin.master')

@section('title', '| Voucher')

@section('content-main')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>DataTables Voucher</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/dashboard1">Home</a></li>
                            <li class="breadcrumb-item active">DataTables Voucher</li>
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
                                <a type="button" href="{{ route('admin.voucher.create') }}" class="btn btn-primary mb-2"
                                    href="">Create</a>
                                <table id="example1" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Title</th>
                                            <th>discription</th>
                                            <th>Date Start</th>
                                            <th>Date End</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($vouchers as $voucher)
                                            <tr>
                                                @php
                                                  $avata = $voucher->image == null || !file_exists(public_path('image/voucher/'. $voucher->image))  ?  'https://www.salonlfc.com/wp-content/uploads/2018/01/image-not-found-1-scaled.png' : asset('image/voucher/'. $voucher->image)
                                                @endphp
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $voucher->name }}</td>
                                                <td>{{ $voucher->title }}</td>
                                                <td>{{ $voucher->discription }}</td>
                                                <td>{{ $voucher->time_start }}</td>
                                                <td>{{ $voucher->time_end }}</td>
                                                <td><img src="{{ $avata }}" alt="" width="100"></td>
                                                <td class="d-flex">
                                                    <a type="button"
                                                        href="{{ route('admin.voucher.edit', ['id' => $voucher->id]) }}"
                                                        class="btn btn-info mx-2">edit</a>
                                                    <a type="button" onClick="return confirmDelete ()"
                                                        href="{{ route('admin.voucher.remove', ['id' => $voucher->id]) }}"
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

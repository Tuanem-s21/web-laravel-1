@extends('admin.master')

@section('title', '| Category')

@section('content-main')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>DataTables Category</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/dashboard1">Home</a></li>
                            <li class="breadcrumb-item active">DataTables Category</li>
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
                                <a type="button" href="{{ route('admin.category.create') }}" class="btn btn-primary mb-2"
                                    href="">Create</a>
                                <table id="example1" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Status</th>
                                            <th colspan="2">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($categories as $category)
                                            <tr>
                                               
                                                <td>{{ $loop->iteration }}</td>
                                                
                                                <td>{{ $category->name }}</td>
                                                <td>{{ $category->description }}</td>
                                                <td>{{ $category->status == 1 ? "Active" : "Block" }}</td>
                                                <td class="d-flex">
                                                    <a type="button"
                                                        href="{{ route('admin.category.edit', ['id' => $category->id]) }}"
                                                        class="btn btn-info mx-2">edit</a>
                                                    <a type="button" onClick="return confirmDelete ()"
                                                        href="{{ route('admin.category.remove', ['id' => $category->id]) }}"
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

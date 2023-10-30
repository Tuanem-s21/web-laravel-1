@extends('admin.master')

@section('title', '| User')

@section('content-main')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>DataTables User</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/dashboard1">Home</a></li>
                            <li class="breadcrumb-item active">DataTables User</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <!-- /.card-header -->
                            <div class="card-body">
                                <a type="button" href="{{ route('admin.user.create') }}" class="btn btn-primary mb-2"
                                    href="">Create</a>
                                <table id="example1" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Avata</th>
                                            <th>FirstName</th>
                                            <th>LastName</th>
                                            <th>Email</th>
                                            <th>role</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                            <tr>
                                                @php
                                                  $picture = $user->image == null || !file_exists(public_path('image/user/'. $user->image))  ?  'https://www.salonlfc.com/wp-content/uploads/2018/01/image-not-found-1-scaled.png' : asset('image/user/'. $user->image)
                                                  @endphp
                                                
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td><img src="{{ $picture }}" alt="" width="100"></td>
                                                <td>{{ $user->firstname }}</td>
                                                <td>{{ $user->lastname }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->role == 1 ? 'Admin' : 'Member' }}</td>
                                                <td class="d-flex">
                                                    <a type="button"
                                                        href="{{ route('admin.user.edit', ['id' => $user->id]) }}"
                                                        class="btn btn-info mx-2">edit</a>
                                                    <a type="button" onClick="return confirmDelete ()"
                                                        href="{{ route('admin.user.remove', ['id' => $user->id]) }}"
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
        <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection

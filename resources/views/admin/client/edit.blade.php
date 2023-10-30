@extends('admin/master')

@section('title', '| Client - Edit')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>


@section('content-main')
<div class="wrapper">
    <div class="content-wrapper">
        <section class="container-fluid">
            <h1 class="pt-5 px-5">Client Controller - Action Create</h1>

            <form class="px-5 py-5" action="{{ route('admin.client.update', ['id' => $client->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <table>
                    
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="FirstName" name="firstname" value="{{ old('firstname', $client->firstname) }}">
                        <label for="floatingInput">FirstName</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="LastName" name="lastname" value="{{ old('lastname', $client->lastname) }}">
                        <label for="floatingInput">LastName</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" value="{{ old('email', $client->email) }}" disabled="disabled">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" value="">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password Confirmation" name="password_confirmation" value="">
                        <label for="floatingPassword">Password Confirmation</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="file" name="image" class="form-control" id="floatingInput" placeholder="Avata">
                        <label for="floatingInput">Avata</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="radio" name="gender" value="1" {{ old('gender', $client->gender) == 1 ? 'checked' : '' }}> Male
                        <input type="radio" name="gender" value="2" {{ old('gender', $client->gender) == 2 ? 'checked' : '' }}> Female
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="floatingPassword" placeholder="Phone" name="phone" value="{{ old('phone', $client->phone) }}">
                        <label for="floatingPassword">Phone</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingPassword" placeholder="Address" name="address" value="{{ old('address', $client->address) }}">
                        <label for="floatingPassword">Address</label>
                    </div>
                    {{-- <div class="form-floating mb-3">
                        <select name="role">
                            <option value="1" {{ old('role') == 1 ? 'selected' : '' }}>Admin</option>
                            <option value="2" {{ old('role') == 2 ? 'selected' : '' }}>Member</option>
                        </select>
                    </div> --}}
                    <div class="form-floating mb-3">
                        <input type="radio" name="status" value="1" {{ old('status', $client->status) == 1 ? 'checked' : '' }}> Active
                        <input type="radio" name="status" value="2" {{ old('status', $client->status) == 2 ? 'checked' : '' }}> Block
                    </div>
                    <button type="submit" class="btn btn-outline-dark">Send</button>
                </table>
            </form>
        </section>
    </div>    
</div>


    
@endsection
{{-- @extends('admin/master')

@section('title', '| Staff - Edit')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>


@section('content-main')
<div class="wrapper">
    <div class="content-wrapper">
        <section class="container-fluid">
            <h1 class="pt-5 px-5">Staff Controller - Action Create</h1>

            <form class="px-5 py-5" action="{{ route('admin.staff.update', ['id' => $staff->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <table>
                    <div class="form-floating mb-3">
                        <input type="file" name="image" class="form-control" id="floatingInput" placeholder="Avata">
                        <label for="floatingInput">Avata</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="FirstName" name="firstname" value="{{ old('firstname', $staff->firstname) }}">
                        <label for="floatingInput">FirstName</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="LastName" name="lastname" value="{{ old('lastname', $staff->lastname) }}">
                        <label for="floatingInput">LastName</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" value="{{ old('email', $staff->email) }}" disabled="disabled">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="radio" name="gender" value="1" {{ old('gender', $staff->gender) == 1 ? 'checked' : '' }}> Male
                        <input type="radio" name="gender" value="2" {{ old('gender', $staff->gender) == 2 ? 'checked' : '' }}> Female
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="floatingInput" placeholder="Phone" name="phone" value="{{ old('phone', $staff->phone) }}">
                        <label for="floatingInput">Phone</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Address" name="address" value="{{ old('address', $staff->address) }}">
                        <label for="floatingInput">Address</label>
                    </div>

                    <button type="submit" class="btn btn-outline-dark">Send</button>
                </table>
            </form>
        </section>
    </div>    
</div>


    
@endsection --}}
@extends('admin/master')

@section('title', '| Voucher - Create')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>


@section('content-main')
<div class="wrapper">
    <div class="content-wrapper">
        <section class="container-fluid">
            <h1 class="pt-5 px-5">Voucher Controller - Action Create</h1>

            <form class="px-5 py-5" action="{{ route('admin.voucher.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <table>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Name" name="name" value="{{ old('name') }}">
                        <label for="floatingInput">Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Title" name="title" value="{{ old('title') }}">
                        <label for="floatingInput">Title</label>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea cols="120" rows="10" placeholder="discription" name="discription" >{{ old('discription') }}</textarea>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="date" class="form-control" placeholder="Date Start" name="time_start" value="{{ old('time_start') }}">
                    </div>
                    <div class="form-floating mb-3">
                        <input type="date" class="form-control" placeholder="Date End" name="time_end" value="{{ old('time_end') }}">
                    </div>
                    <div class="form-floating mb-3">
                        <input type="file" name="image" class="form-control" id="floatingInput" placeholder="Avata">
                        <label for="floatingInput">Avata</label>
                    </div>
                    <button type="submit" class="btn btn-outline-dark">Send</button>
                </table>
            </form>
        </section>
    </div>    
</div>


    
@endsection
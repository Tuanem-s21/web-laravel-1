@extends('admin/master')

@section('title', '| service - Create')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>


@section('content-main')
<div class="wrapper">
    <div class="content-wrapper">
        <section class="container-fluid">
            <h1 class="pt-5 px-5">Service Controller - Action Create</h1>

            <form class="px-5 py-5" action="{{ route('admin.service.update', ['id' => $service->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <table>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Name Service" name="name" value="{{ old('name', $service->name) }}">
                        <label for="floatingInput">Name Service</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="floatingInput" placeholder="Price" name="price" value="{{ old('price', $service->price) }}">
                        <label for="floatingInput">Price</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Intro" name="intro" value="{{ old('intro', $service->intro) }}">
                        <label for="floatingInput">Intro</label>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea cols="120" rows="10" placeholder="Content" name="content">{{ old('content', $service->content) }}</textarea>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="radio" name="status" value="1" {{ old('status', $service->status) == 1 ? 'checked' : '' }}> Active
                        <input type="radio" name="status" value="2" {{ old('status', $service->status) == 2 ? 'checked' : '' }}> Block
                    </div>
                    <div class="form-floating mb-3">
                        <input type="file" name="image" class="form-control" id="floatingInput" placeholder="Picture">
                        <label for="floatingInput">Picture</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Time" name="time" value="{{ old('time', $service->time) }}">
                        <label for="floatingInput">Time</label>
                    </div>
                    <button type="submit" class="btn btn-outline-dark">Send</button>
                </table>
            </form>
        </section>
    </div>    
</div>


    
@endsection
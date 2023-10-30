@extends('admin/master')

@section('title', '| service - Create')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>


@section('content-main')
<div class="wrapper">
    <div class="content-wrapper">
        <section class="container-fluid">
            <h1 class="pt-5 px-5">Service Controller - Action Create</h1>

            <form class="px-5 py-5" action="{{ route('admin.service.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <table>
                    
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Name Service" name="name" value="{{ old('name') }}">
                        <label for="floatingInput">Name Service</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="floatingInput" placeholder="Price" name="price" value="{{ old('price') }}">
                        <label for="floatingInput">Price</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Intro" name="intro" value="{{ old('intro') }}">
                        <label for="floatingInput">Intro</label>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea cols="120" rows="10" placeholder="Content" name="content">{{ old('content') }}</textarea>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="radio" name="status" value="1" {{ old('status', 1) == 1 ? 'checked' : '' }}> Active
                        <input type="radio" name="status" value="2" {{ old('status') == 2 ? 'checked' : '' }}> Block
                    </div>
                    <div class="form-floating mb-3">
                        <input type="file" name="image" class="form-control" id="floatingInput" placeholder="Picture">
                        <label for="floatingInput">Picture</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Time" name="time" value="{{ old('time') }}">
                        <label for="floatingInput">Time</label>
                    </div>
                    <div class="form-floating mb-3">
                        <div>Category</div>
                        <div>
                            <select class="mb-3 px-5 py-3" name="category_id" id="">
                                <option value="">Please choose category</option>
                
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-outline-dark">Send</button>
                </table>
            </form>
        </section>
    </div>    
</div>


    
@endsection
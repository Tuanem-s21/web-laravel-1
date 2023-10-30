@extends('admin/master')

@section('title', '| Category - Create')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>


@section('content-main')
<div class="wrapper">
    <div class="content-wrapper">
        <section class="container-fluid">
            <h1 class="pt-5 px-5">Category Controller - Action Create</h1>

            <form class="px-5 py-5" action="{{ route('admin.category.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <table>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Name Category" name="name" value="{{ old('name') }}">
                        <label for="floatingInput">Name Category</label>
                    </div>
                    
                    <div class="form-floating mb-3">
                        <textarea cols="120" rows="10" placeholder="Description" name="description">{{ old('description') }}</textarea>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="radio" name="status" value="1" {{ old('status', 1) == 1 ? 'checked' : '' }}> Active
                        <input type="radio" name="status" value="2" {{ old('status') == 2 ? 'checked' : '' }}> Block
                    </div>
                    <button type="submit" class="btn btn-outline-dark">Send</button>
                </table>
            </form>
        </section>
    </div>    
</div>


    
@endsection
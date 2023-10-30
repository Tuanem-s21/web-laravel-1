<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin @yield('title')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  @include('admin/patials/head')

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">



    @include('admin/patials/navbar')



    @if ($errors->any())
      <div class="alert alert-danger" style="text-align: right !important;">
          <ul style="text-align: right !important;">
              @foreach ($errors->all() as $error)
                  <li style="text-align: right !important;">{{ $error }}</li>
              @endforeach
          </ul>
      </div>
    @endif

    @if (Session::has('success'))
        <div class="alert alert-success alert-block" style="text-align: right !important;">
          <strong style="text-align: right !important; ">{{ Session::get('success') }}</strong>
        </div>
    @endif

    @include('admin/patials/sidebar')

    @yield('content-main')
    
    @include('admin/patials/footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@include('admin/patials/fost')



<script>
    function confirmDelete () {
        if (window.confirm("Do you want to delete this row ?")) {
            return true;
        }

        return false
    }
  </script>
</body>
</html>

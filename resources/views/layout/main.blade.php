<!DOCTYPE html>
<html lang="en">
@include('layout/head')
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        @include('layout/navbar')

        <!-- Main Sidebar Container -->
        @include('layout/sidebar')

        <!-- Content Wrapper. Contains page content -->
        @yield('content')
        <!-- /.content-wrapper -->

        @include('layout/footer')
    </div>
    <!-- ./wrapper -->

    @include('layout/javascript')
</body>

</html>
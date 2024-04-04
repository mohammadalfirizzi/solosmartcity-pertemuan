<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset("/bower_components/admin-lte/plugins/fontawesome-free/css/all.min.css")}}">
    <!-- Ionicons -->
    <link rel=" stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{ asset("/bower_components/admin-lte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css")}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset("/bower_components/admin-lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css")}}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset("/bower_components/admin-lte/plugins/jqvmap/jqvmap.min.css")}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset("/bower_components/admin-lte/dist/css/adminlte.min.css")}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset("/bower_components/admin-lte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css")}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset("/bower_components/admin-lte/plugins/daterangepicker/daterangepicker.css")}}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset("/bower_components/admin-lte/plugins/summernote/summernote-bs4.min.css")}}">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        @include("admin.header")
        <!-- /.navbar -->

        @include("admin.sidebar")
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Solo Event</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Solo Events</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Solo Event</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form action="{{route('updateSoloEvent')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        <input name="id" type="text" class="form-control" id="exampleJudulBerita" value="{{$data->id}}">
                                        <div class="form-group">
                                            <label for="exampleJudulBerita">Judul Berita</label>
                                            <input name="title" type="text" class="form-control" id="exampleJudulBerita" placeholder="Masukkan Judul Berita" value="{{$data->title}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Masukkan Start Periode</label>
                                            <input name="start_periode" type="date" class="form-control" id="exampleInputPassword1" placeholder="Start Periode" value="{{$data->start_periode}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Masukkan End Periode</label>
                                            <input name="end_periode" type="date" class="form-control" id="exampleInputPassword1" placeholder="End Periode" value="{{$data->end_periode}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleJudulBerita">Lokasi</label>
                                            <input name="location" type="text" class="form-control" id="exampleJudulBerita" placeholder="Masukkan Lokasi" value="{{$data->location}}">
                                        </div>
                                        <div class="form-group">
                                            <label>Deskripsi</label>
                                            <textarea name="description" class="form-control" rows="3" placeholder="Masukkan Deskripsi ...">{{$data->title}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <!-- <label for="customFile">Custom File</label> -->

                                            <div class="custom-file">
                                                <input name="image_url" type="file" class="custom-file-input" id="customFile" accept="image/*">
                                                <label class="custom-file-label" for="customFile">{{$data->image_url}}</label>
                                            </div>
                                        </div>
                                        <div class="form-check">
                                            <input name="is_galerysoloevent" type="checkbox" class="form-check-input" id="exampleCheck1" {{$data->is_galerysoloevent == 1 ? "checked" : ""}}>
                                            <label class="form-check-label" for="exampleCheck1">Simpan sebagai Galery Solo Events</label>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.2.0
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    <!-- JQUERY -->
    <script src="{{ asset("/bower_components/admin-lte/plugins/jquery/jquery.min.js")}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset("/bower_components/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
    <!-- bs-custom-file-input -->
    <script src="{{ asset("/bower_components/admin-lte/plugins/bs-custom-file-input/bs-custom-file-input.min.js")}}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset("/bower_components/admin-lte/dist/js/adminlte.min.js")}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset("/bower_components/admin-lte/dist/js/demo.js")}}"></script>
    <script>
        $(function() {
            bsCustomFileInput.init();
        });
    </script>
</body>

</html>
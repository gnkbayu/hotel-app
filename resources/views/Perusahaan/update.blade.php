
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <title>Admin | Tamu</title>
  @include('Template.head')
 
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  @include('Template.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
 @include('Template.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
          @if(Session::has('succes'))
            <p class="alert alert-success mt-3">{{ Session::get('succes') }}</p>
          @endif
          <div class="">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Tamu</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    
    <div class="content">
      <div class="container-fluid">
      <div class="card card-info mt-3">
            <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
      <form action="{{ url('perusahaan/'.$modelperusahaan->id) }}" method="POST">
              @csrf
              <input type="hidden" name="_method" value="PATCH">
      <div class="card-body">
                  <div class="row">
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nama Hotel</label>
                        <input type="text" class="form-control" name="nama_hotel" value="{{ $modelperusahaan->nama_hotel }}" placeholder="Enter ...">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Perusahaan</label>
                        <input type="text" class="form-control" name="nama_perusahaan" value="{{ $modelperusahaan->nama_perusahaan }}" placeholder="Enter ..." >
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" class="form-control" name="alamat" value="{{ $modelperusahaan->alamat }}" placeholder="Enter ..." >
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>No Fax</label>
                        <input type="text" class="form-control" name="no_fax" value="{{ $modelperusahaan->no_fax }}" placeholder="Enter ...">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Kabupaten</label>
                        <input type="text" class="form-control" name="kabupaten" value="{{ $modelperusahaan->kabupaten }}" placeholder="Enter ..." >
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Provinsi</label>
                        <input type="text" class="form-control" name="provinsi" value="{{ $modelperusahaan->provinsi }}" placeholder="Enter ..." >
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" name="email" value="{{ $modelperusahaan->email }}" placeholder="Enter ...">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Telepon</label>
                        <input type="text" class="form-control" name="phone" value="{{ $modelperusahaan->phone }}" placeholder="Enter ..." >
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <input type="hidden" class="form-control" placeholder="Enter ..." >
                      </div>
                    </div>
                  </div>
   <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Update</button>
                </div>
                </form>
                </div>
            </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3 text-center">
      <h5>{{ auth()->user()->name }}</h5>
      <!-- Logout -->
      <p>{{ auth()->user()->level }}</p>
      <div class="pull-right">
         <a href="{{ route('logout') }}"
         class="btn btn-default btn-flat">Log Out</a>
      </div>
      <!-- Akhir Logout-->
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  @include('Template.Footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
@include('Template.script')
</body>
</html>

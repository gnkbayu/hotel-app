
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <title>Admin | Pemesan</title>
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
        <div class="row mb-2">
          <div class="col-sm-6">
          <form class="form-inline my-2 my-lg-0 " action="{{ url('pemesan') }}" method="GET">
            <input class="form-control mr-sm-2" name="keyword" value="{{ $keyword }}" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Pemesan</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
 
    <div class="content">
      <div class="container-fluid">
      <div class="card">
              <div class="card-header">
                <h3 class="card-title">Pemesan Online</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Cek In</th>
                    <th>Cek Out</th>
                    <th>Jumlah</th>
                    <th>Pemesan</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Tipe Kamar</th>
                    <th>Aksi</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                  @php
                  $no = 1;
                  @endphp
                  @foreach($datapemesan as $key=>$value)
                  <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $value->cekin }}</td>
                    <td>{{ $value->cekout }}</td>
                    <td>{{ $value->jml_kamar }}</td>
                    <td>{{ $value->nama_pemesan }}</td>
                    <td>{{ $value->email_pemesan }}</td>
                    <td>{{ $value->phone }}</td>
                    <td>{{ $value->tipe_kamar }}</td>
                    <!-- <td>
                        <button class="btn btn-primary" type="button" onclick="fungsiSaya()" value="2" id="Btn">Konfirmasi</button>
                    </td> -->
                    <td>
                        <form action="{{ url('pemesan/'. $value->id) }}" method="POST">
                        @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-danger" type="submit" onclick="return confirm('Kamu Yakin Menghapus Data Ini?')">Hapus</button>
                        </form>
                    </td>
                  </tr>
                  @endforeach
                  </tbody>
                </table>
                <div class="mt-2">
                {{ $datapemesan->links('pagination::bootstrap-4') }}
                </div>
              </div>
              <!-- /.card-body -->
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

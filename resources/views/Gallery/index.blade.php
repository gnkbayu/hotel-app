
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <title>Admin | Gallery</title>
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
              <li class="breadcrumb-item"><a href="#">Gallery</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    
    <div class="content">
      <div class="container-fluid">
      <a href="{{ url('gallery/create') }}" class="btn btn-primary mb-3">Tambah</a>
      <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Fasilitas</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Category</th>
                    <th>Project Name</th>
                    <th colspan="2">Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  @php 
                  $no=1;
                  @endphp
                  @foreach($datagallery as $key=>$value)
                  <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $value->category }}</td>
                    <td>{{ $value->project_name }}</td>
                    <td>
                        <a href="{{ url('gallery/'. $value->id.'/edit') }}" class="btn btn-info">edit</a>
                    </td>
                    <td>
                        <form action="{{ url('gallery/'. $value->id) }}" method="POST">
                        @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-danger" type="submit">Hapus</button>
                        </form>
                    </td>
                  @endforeach
                  </tbody>
                </table>
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

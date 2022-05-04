
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
        <div class="row mb-3">
          <div class="col-md-2">
          <a href="{{ url('tamu/create') }}" class="btn btn-primary">Tambah Tamu</a>
          </div>
          <div class="col-md-9">
          <form class="form-inline my-2 my-lg-0 " action="{{ url('tamu') }}" method="GET">
            <input class="form-control mr-sm-2" name="keyword" value="{{ $keyword }}" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
          </div>
        </div>
      
     
      <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Tamu</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>No Identitas</th>
                    <th>Negara</th>
                    <th>Alamat</th>
                    <th>Kabupaten</th>
                    <th>Provinsi</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th colspan="2">Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  @php 
                  $no=1;
                  @endphp
                  @foreach($datatamu as $key=>$value)
                  <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->no_identitas }}</td>
                    <td>{{ $value->warga_negara }}</td>
                    <td>{{ $value->alamat }}</td>
                    <td>{{ $value->kabupaten }}</td>
                    <td>{{ $value->provinsi }}</td>
                    <td>{{ $value->email }}</td>
                    <td>{{ $value->phone }}</td>
                    <td>
                        <a href="{{ url('tamu/'. $value->id.'/edit') }}" class="btn btn-info">edit</a>
                    </td>
                    <td>
                        <form action="{{ url('tamu/'. $value->id) }}" method="POST">
                        @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-danger delete" data-id="{{ $value->id }}" type="submit">Hapus</button>
                        </form>
                    </td>
                  @endforeach
                  </tbody>
                </table>
                {{ $datatamu->links('pagination::bootstrap-4') }}
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

<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
     
    </ul>

   @php 
   $jumlah_message = DB::table('message')->count();
   @endphp
    <!-- Right navbar links -->
    
    <ul class="navbar-nav ml-auto">
    @if(auth()->user()->level == "karyawan")
    <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fas fa-envelope"></i>
          <span class="badge badge-danger navbar-badge">{{ $jumlah_message }}</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">Message</span>
          <div class="dropdown-divider"></div>
          <a href="{{ ('/message') }}" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i>{{ $jumlah_message }}
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <!-- <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
        </div> -->
      </li>
      @endif
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button"><i
            class="fas fa-user">{{ auth()->user()->name }}</i></a>
      </li>
    </ul>
  </nav>
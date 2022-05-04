<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ ('/home') }}" class="brand-link">
      
      <span class="brand-text font-weight-light">Admin Hotel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('foto/1648791322user1-128x128.jpg') }}" class="img-circle elevation-2" >
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ auth()->user()->name }}</a>
          <a>{{ auth()->user()->level }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

               <!-- Chekin -->
          <!-- <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Check In/Out
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Checkin</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Checkout</p>
                </a>
              </li>
            </ul>
          </li> -->
        <!-- Akhir Chekin -->

        <!-- Kamar -->
        @if(auth()->user()->level == "admin")
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa fa-bed"></i>
              <p>
                Room
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ ('fasilitas') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lihat Kamar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ ('fasilitas/create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Kamar</p>
                </a>
              </li>
            </ul>
          </li>
          @endif
        <!-- Akhir Kamar -->

        <!-- Layanan -->
        @if(auth()->user()->level == "admin")
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-utensils"></i>
              <p>
                Layanan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ ('layanan') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lihat Layanan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ ('layanan/create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Layanan</p>
                </a>
              </li>
            </ul>
          </li>
          @endif
          <!-- Akhir Layanan -->

            <!-- Buku Tamu -->
            @if(auth()->user()->level == "karyawan")
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-suitcase"></i>
              <p>
                Buku Tamu
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ ('/tamu') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lihat Tamu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('tamu/create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Tamu</p>
                </a>
              </li>
            </ul>
          </li>
          @endif
          <!-- Akhir Buku Tamu -->

          <!-- Buku Pemesanan -->
          @if(auth()->user()->level == "karyawan")
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-suitcase"></i>
              <p>
                Pemesanan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ ('/pemesan') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lihat Pemesan</p>
                </a>
              </li>
            </ul>
          </li>
          @endif
          <!-- Akhir Buku Tamu -->

           <!-- User Manager -->
           @if(auth()->user()->level == "admin")
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-user"></i>
              <p>
                User Manager
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ ('pengguna') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lihat User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ ('pengguna/create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah User</p>
                </a>
              </li>
            </ul>
          </li>
          @endif
          <!-- Akhir User Manager -->
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
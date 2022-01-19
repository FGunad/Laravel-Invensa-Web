<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/adminlte/index3.html" class="brand-link">
      <img src="{{ url('images/logo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">{{ config('app.name') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/adminlte/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->nama_petugas }}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <x-nav-item label="Dashboard" icon="fas fa-tachometer-alt" :link="route('petugas.dashboard')"/>
            <x-nav-item label="Petugas" icon="fas fa-user-friends" :link="route('petugas.index')"/>
            <x-nav-item label="Pegawai" icon="fas fa-users" link="#"/>
            <x-nav-item label="Jenis" icon="fas fa-object-group" link="#"/>
            <x-nav-item label="Ruangan" icon="fas fa-archive" link="#"/>
            <x-nav-item label="Inventaris" icon="fas fa-desktop" link="#"/>
            <x-nav-item label="Peminjaman" icon="fas fa-hand-holding-heart" link="#"/>
            <x-nav-item label="Pengembalian" icon="fas fa-recycle" link="#"/>
            <x-nav-item label="Laporan" icon="fas fa-file-alt" link="#"/>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

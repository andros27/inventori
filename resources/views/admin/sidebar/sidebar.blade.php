  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="/uploads/avatar/{{ Auth::user()->avatar }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> {{ Auth::user()->jabatan }}</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="{{url('/')}}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        <li class="treeview">
          <a href="#">
            <i class="fa  fa-paper-plane-o"></i>
            <span>Data Master</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('kategori.index')}}"><i class="fa fa-tags"></i> Kategori Barang</a></li>
            <li><a href="{{route('provinsi.index')}}"><i class="fa fa-map-o"></i> Provinsi</a></li>
            <li><a href="{{route('kota.index')}}"><i class="fa fa-map-marker"></i> Kota</a></li>
            <li><a href="{{route('supplier.index')}}"><i class="fa fa-id-card-o"></i> Supplier</a></li>
            <li><a href="{{route('profile.index')}}"><i class="fa fa-users"></i> Pegawai</a></li>
          </ul>
        </li>
        
    </section>
    <!-- /.sidebar -->
  </aside>

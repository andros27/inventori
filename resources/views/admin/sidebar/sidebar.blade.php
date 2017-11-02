<div class="page-content d-flex align-items-stretch">
        <!-- Side Navbar -->
        <nav class="side-navbar">
          <!-- Sidebar Header-->
          <div class="sidebar-header d-flex align-items-center">
            <a href="{{ route('profile.edit', Auth::user()->id)}}"><div class="avatar"><img src="/uploads/avatar/{{ Auth::user()->avatar }}" alt="..." class="img-fluid rounded-circle"></div>
            <div class="title">
              <h1 class="h4"> {{ Auth::user()->name }}</h1></a>
              <p>{{ Auth::user()->jabatan }}</p>
            </div>
          </div>
          <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
          <ul class="list-unstyled">
            <li class="active"> <a href="{{url('admin')}}"><i class="fa fa-home"></i>Home</a></li>
            @if(Auth::user()->jabatan == "Pemilik")
            <li><a href="#dashvariants" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-handshake-o"></i>Data Master </a>
              <ul id="dashvariants" class="collapse list-unstyled">
                <li><a href="{{route('kategori.index')}}"><i class="fa fa-tags"></i> Kategori Barang</a></li>
                <li><a href="#"><i class="fa fa-id-card-o"></i> Supplier</a></li>
                <li><a href="{{route('profile.index')}}"><i class="fa fa-users"></i> Pegawai</a></li>
              </ul>
            </li>
            <li> <a href="#"><i class="fa fa-briefcase"></i>Stok Barang </a></li>
            <li><a href="#dashvariants2" aria-expanded="false" data-toggle="collapse"><i class="fa fa-bar-chart"></i>Laporan </a>
              <ul id="dashvariants2" class="collapse list-unstyled">
                <li><a href="#"><i class="fa fa-area-chart"></i>Laba Rugi (FIFO)</a></li>
                <li><a href="#"><i class="fa fa-bar-chart-o"></i>Pemasukan Barang</a></li>
                <li><a href="#"><i class="fa fa-pie-chart"></i>Pengeluaran Barang</a></li>
              </ul>
            </li>
            @else
            <li> <a href="#"><i class="fa fa-briefcase"></i>Stok Barang </a></li>
            @endif
          </ul>
        </nav>
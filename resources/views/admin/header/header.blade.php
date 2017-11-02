<div class="page home-page">
      <!-- Main Navbar-->
      <header class="header">
        <nav class="navbar">
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <!-- Navbar Header-->
              <div class="navbar-header">
                <!-- Navbar Brand --><a href="{{url('/admin')}}" class="navbar-brand">
                  <div class="brand-text brand-big hidden-lg-down"><span>TB.Wuni &nbsp;</span><strong>Dashboard</strong></div>
                  <div class="brand-text brand-small"><strong>WN</strong></div></a>
                <!-- Toggle Button--><a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
              </div>
              <!-- Navbar Menu -->
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <li class="nav-item">&nbsp;&nbsp;</li>
                <!-- Logout    -->
                <li class="nav-item"><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="nav-link logout">Logout<i class="fa fa-sign-out"></i></a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
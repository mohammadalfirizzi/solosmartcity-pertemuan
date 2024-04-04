{{-- navbar --}}
<header class="header-area header-sticky">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="/beranda" class="logo">
              <h1>SoloSmartcity</h1>
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li><a href="/beranda" class="{{ request()->is('beranda') ? 'active' : '' }}">Beranda</a></li>
              <li><a href="/tentang" class="{{ request()->is('tentang') ? 'active' : '' }}">Tentang</a></li>
              <li><a href="/dimensiutama" class="{{ request()->is('dimensiutama') ? 'active' : '' }}">Dimensi</a></li>
              <li><a href="/soloevent" class="{{ request()->is('soloevent') ? 'active' : '' }}">Solo Events</a></li>
              <li><a href="/experience" class="{{ request()->is('experience') ? 'active' : '' }}">Digital Experience</a></li>
              <li>
                <a href="#"><i class="fa fa-search"></i> Search</a>
              </li>
            </ul>
            <a class="menu-trigger">
              <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
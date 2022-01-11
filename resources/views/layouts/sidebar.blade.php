<div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="#">MEOWS</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{-- route('dashboard-admin') --}}">Tes</a>
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header">Menu</li>
              <li class="nav-item  @if(Route::currentRouteName() == 'home') active @endif">
                <a href="{{route('home')}}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
              </li>
              <li class="nav-item">
                <a href="{{-- route('barang.index') --}}" class="nav-link"><i class="fas fa-book"></i><span>Data Artikel</span></a>
              </li>
              <li class="nav-item  @if(Route::currentRouteName() == 'transaksi-admin') active @endif">
                <a href="{{-- route('admin.transaksi') --}}" class="nav-link"><i class="fas fa-users"></i><span>Data User</span></a>
              </li>
              <li class="nav-item ">
                <a href="#" class="nav-link"><i class="fas fa-truck-moving"></i><span>Data Diskusi</span></a>
              </li>
            </ul>           
        </aside>
      </div>
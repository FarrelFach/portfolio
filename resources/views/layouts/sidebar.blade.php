<!-- Sidebar -->
<div class="sidebar">


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ url('home') }}" class="nav-link {{ request()->is('home*') ? 'active' : '' }}">
              
              <p>
                Home
                <i class="right fas"></i>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('pelanggan') }}" class="nav-link {{ request()->is('barang*') ? 'active' : '' }}">
              
              <p>
                Pelanggan
                <i class="right fas"></i>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('service') }}" class="nav-link {{ request()->is('penjualan*') ? 'active' : '' }}">
              
              <p>
                Service
                <i class="right fas"></i>
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="{{ url('kota') }}" class="nav-link {{ request()->is('prediksi*') ? 'active' : '' }}">
              
              <p>
                Kota
                <i class="right fas"></i>
              </p>
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <div class="sidebar-brand d-flex align-items-center justify-content-center bg-gradient-success">
        <div class="sidebar-brand-text">
          <img src="" width="70">
        </div>
        <div class="sidebar-brand-text">Wisata Kuningan</div>
      </div>
      <hr class="sidebar-divider my-0">

      <li class="nav-item {{ Request::is('admin/DasboardAdmin')? "active":""}}">
        <a class="nav-link" href="">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <hr class="sidebar-divider">

      <li class="nav-item {{ Request::is('admin/MengelolaTempatWisata')? "active":""}}">
        <a class="nav-link" href="{{url ('admin/MengelolaTempatWisata')}}">
          <i class="fas fa-fw fa-palette"></i>
          <span>Tempat Wisata</span>
        </a>  
      </li>
      
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap1"
          aria-expanded="true" aria-controls="collapseBootstrap1">
          <i class="far fa-fw fa-user"></i>
          <span>hfhh</span>
        </a>
        <div id="collapseBootstrap1" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Akun</h6>
            <a class="collapse-item" href="">contoh</a>
            <a class="collapse-item" href="">cek</a>
          </div>
        </div>
      </li>

     <li class="nav-item ">
        <a class="nav-link" href="">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>Galeri</span>
        </a>
      </li>

      <hr class="sidebar-divider">
            
    </ul>
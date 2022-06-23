  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="{{route('home')}}">
        <img src="https://tirana.al/img/logo.svg" class="navbar-brand-img h-100" alt="main_logo">
       <!-- <span class="ms-1 font-weight-bold">Fondi</span>-->
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100 h-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link  active" href="{{route('home')}}">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-primary text-center me-2 d-flex align-items-center justify-content-center">
                <i class="fas fa-fw fa-tachometer-alt"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
       
        <!--Fondi-->
         <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Fondi</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link  " href="{{route('libra')}}">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-primary text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="fa-fw fas fa-book c-sidebar-nav-icon"></i>
            </div>
            <span class="nav-link-text ms-1">Libra</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link  " href="{{route('shto_liber')}}">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-primary text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="fa-fw fas fa-plus c-sidebar-nav-icon"></i>
            </div>
            <span class="nav-link-text ms-1">Shto libër</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link  " href="{{route('file-import')}}">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-primary text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="fa-fw fas fa-file-import c-sidebar-nav-icon"></i>
            </div>
            <span class="nav-link-text ms-1">Importo libra</span>
          </a>
        </li>
         <li class="nav-item">
          <a class="nav-link  " href="{{ route('export') }}">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-primary text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="fa-fw fas fa-file-export c-sidebar-nav-icon"></i>
            </div>
            <span class="nav-link-text ms-1">Eksporto libra</span>
          </a>
        </li>
         <!--<li class="nav-item">
          <a class="nav-link  " href="{{route('kategori')}}">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-primary text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="fa-fw fas fa-book c-sidebar-nav-icon"></i>
            </div>
            <span class="nav-link-text ms-1">Kategori</span>
          </a>
        </li>-->


        <!--Fund Fondi-->



       <!-- Konfigurime-->
       
         <?php $roles = Auth::user()->id; ?>
            @if($roles == 1)
             <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Konfigurime</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link  " href="{{route('perdorues')}}">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-primary text-center me-2 d-flex align-items-center justify-content-center">
                <i class="fa-fw fas fa-user c-sidebar-nav-icon"></i>
            </div>
            <span class="nav-link-text ms-1">Përdorues</span>
          </a>
        </li>
      

        <li class="nav-item">
          <a class="nav-link  " href="{{ route('logout') }}">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-primary text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="c-sidebar-nav-icon fas fa-fw fa-sign-out-alt"></i>

            </div>
            <span class="nav-link-text ms-1">Logout</span>
          </a>
        </li>
          @endif
        <!--Fundi i konfigurimeve-->
      </ul>
    </div>
   
  </aside>
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <div class="nav-link">
                <div class="profile-image">
                    <img src="{{asset('plantilla\images\faces\face10.jpeg')}}" alt="image">
                    <span class="online-status online"></span> <!--change class online to offline or busy as needed-->
                </div>
                <div class="profile-name">
                    <p class="name text-uppercase text-primary">
                     {{Auth::user()->nombre}}
                    </p>
                    <p class="designation">
                        Super Admin
                    </p>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index.html">
                <i class="icon-rocket menu-icon"></i>
                <span class="menu-title">Dashboard</span>
                <span class="badge badge-success">New</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages\widgets.html">
                <i class="icon-shield menu-icon"></i>
                <span class="menu-title">Widgets</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#red-binaria" aria-expanded="false" aria-controls="page-layouts">
                <i class="fa fa-sitemap menu-icon text-primary"></i>
                <span class="menu-title">Mi Red Binaria</span>
            </a>
            <div class="collapse" id="red-binaria">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="{{route('nuevoregistro')}}">Nuevo Registro</a></li>
                    <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="{{route('arbolbinario')}}">Arbol Binario</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#administracion" aria-expanded="false" aria-controls="page-layouts">
                <i class="fa fa fa-user-circle-o menu-icon text-primary"></i>
                <span class="menu-title">Administración</span>
            </a>
            <div class="collapse" id="administracion">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="{{route('afiliacion.index')}}">Afiliaciones</a></li>
                    <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="#">Productos</a></li>
                    <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="#">Productos</a></li>
                </ul>
            </div>
        </li>
    </ul>
</nav>

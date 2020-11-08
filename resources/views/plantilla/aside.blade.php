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
            <a class="nav-link" data-toggle="collapse" href="#page-layouts" aria-expanded="false" aria-controls="page-layouts">
                <i class="icon-check menu-icon"></i>
                <span class="menu-title">Mi Red Binaria</span>
            </a>
            <div class="collapse" id="page-layouts">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="{{route('nuevoregistro')}}">Nuevo Registro</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages\layout\rtl-layout.html">RTL</a></li>
                    <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="pages\layout\horizontal-menu.html">Horizontal Menu</a></li>
                </ul>
            </div>
        </li>
    </ul>
</nav>

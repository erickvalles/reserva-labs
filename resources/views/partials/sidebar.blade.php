<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-item">
            <a href="{{route('home')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Dashboard
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('ruta_interna')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Dashboard interno
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Prácticas de laboratorio
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('primera')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Primera página</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Top Navigation + Sidebar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/boxed.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Boxed</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Sidebar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-sidebar-custom.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Sidebar <small>+ Custom Area</small></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-topnav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Navbar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-footer.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Footer</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/collapsed-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Collapsed Sidebar</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Equipo
                <i class="fas fa-angle-left right"></i>

              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('equipo.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ver equipo</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('equipo.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Crear equipo</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('consultas1')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Consultas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('consultas2')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>QueryBuilder</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Laboratorios
                <i class="fas fa-angle-left right"></i>

              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('laboratorios.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ver laboratorios</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('laboratorios.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Crear laboratorio</p>
                </a>
              </li>
            </ul>
          </li>


        </ul>
      </nav>

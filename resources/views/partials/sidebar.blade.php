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
          <li class="nav-item  @if(\Request::routeIs('equipo.*')) menu-is-opening menu-open @endif">
            <a href="#" class="nav-link @if(\Request::routeIs('equipo.*')) active @endif">
            <i class="fas fa-microchip"></i>
              <p>
                Equipo
                <i class="fas fa-angle-left right"></i>

              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('equipo.index')}}" class="nav-link @if(\Request::routeIs('equipo.index')) active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ver equipo</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('equipo.create')}}" class="nav-link  @if(\Request::routeIs('equipo.create')) active @endif">
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
          <li class="nav-item  @if(\Request::routeIs('laboratorios.*')) menu-is-opening menu-open @endif">
            <a href="#" class="nav-link @if(\Request::routeIs('laboratorios.*')) active @endif">
            <i class="fas fa-flask"></i>
              <p>
                Laboratorios
                <i class="fas fa-angle-left right"></i>

              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('laboratorios.index')}}" class="nav-link @if(\Request::routeIs('laboratorios.index')) active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ver laboratorios</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('laboratorios.create')}}" class="nav-link  @if(\Request::routeIs('laboratorios.create')) active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Crear laboratorio</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item  @if(\Request::routeIs('practicas.*')) menu-is-opening menu-open @endif">
            <a href="#" class="nav-link @if(\Request::routeIs('practicas.*')) active @endif">
                <i class="fas fa-ruler-combined"></i>
              <p>
                Prácticas
                <i class="fas fa-angle-left right"></i>

              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('practicas.index')}}" class="nav-link  @if(\Request::routeIs('practicas.index')) active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ver prácticas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('practicas.create')}}" class="nav-link  @if(\Request::routeIs('practicas.create')) active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Crear práctica</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item  @if(\Request::routeIs('carreras.*')) menu-is-opening menu-open @endif">
            <a href="#" class="nav-link @if(\Request::routeIs('carreras.*')) active @endif">
            <i class="fas fa-graduation-cap"></i>
              <p>
                Carreras
                <i class="fas fa-angle-left right"></i>

              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('carreras.index')}}" class="nav-link @if(\Request::routeIs('carreras.index')) active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ver carreras</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('carreras.create')}}" class="nav-link  @if(\Request::routeIs('carreras.create')) active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Crear carrera</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item  @if(\Request::routeIs('materias.*')) menu-is-opening menu-open @endif">
            <a href="#" class="nav-link @if(\Request::routeIs('materias.*')) active @endif">
                <i class="fas fa-chalkboard-teacher"></i>
              <p>
                Materias
                <i class="fas fa-angle-left right"></i>

              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('materias.index')}}" class="nav-link @if(\Request::routeIs('materias.index')) active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ver materias</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('materias.create')}}" class="nav-link @if(\Request::routeIs('materias.create')) active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Crear materia</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item  @if(\Request::routeIs('docentes.*')) menu-is-opening menu-open @endif">
            <a href="#" class="nav-link @if(\Request::routeIs('docentes.*')) active @endif">
                <i class="fas fa-user-tie"></i>
              <p>
                Docentes
                <i class="fas fa-angle-left right"></i>

              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('docentes.index')}}" class="nav-link @if(\Request::routeIs('docentes.index')) active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ver docentes</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('docentes.create')}}" class="nav-link @if(\Request::routeIs('docentes.create')) active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Crear docente</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item  @if(\Request::routeIs('reservas.*')) menu-is-opening menu-open @endif">
            <a href="#" class="nav-link @if(\Request::routeIs('reservas.*')) active @endif">
              <i class="nav-icon fas fa-calendar"></i>
              <p>
                Reservas
                <i class="fas fa-angle-left right"></i>

              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('reservas.index')}}" class="nav-link @if(\Request::routeIs('reservas.index')) active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ver reservas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('reservas.create')}}" class="nav-link @if(\Request::routeIs('reservas.create')) active @endif">
                  <i class="far fa-calendar-plus"></i>
                  <p>Crear reservas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('reservas.calendario')}}" class="nav-link @if(\Request::routeIs('reservas.calendario')) active @endif">
                  <i class="far fa-calendar"></i>
                  <p>Ver calendario</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
              <form action="{{route('logout')}}" method="POST" id="salir">
                @csrf
                <a href="#" class="nav-link" onclick="return document.getElementById('salir').submit(); ">
                    <i class="fas fa-sign-out-alt"></i>
                  <p>Salir</p>
            </form>

            </a>
          </li>


        </ul>
      </nav>

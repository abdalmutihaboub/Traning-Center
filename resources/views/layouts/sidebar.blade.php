  @php
    //   $routes = App\Models\AppRoute::where('active',1)->orderBy('order')->get();
  @endphp

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('/home')}}" class="brand-link">
      <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">{{config('app.name')}}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="" class="d-block m-0 p-0">
          <i class=" fas fa-user text-white m-0 mx-2"></i>
            {{auth()->user()->name}}
          </a>
        </div>
      </div>



      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            @if (auth()->user()->role == 0)
                <li class="nav-item ">
                    <a
                    href="{{url('/companies')}}"
                    class="nav-link rounded-0 {{url('/companies') == url()->full() ? "active": ''}} ">
                    <i class="nav-icon fas fa-building"></i>
                    <p>
                        Companies
                    </p>
                    </a>
                </li>
            @endif


            @if (auth()->user()->role == 0)
                <li class="nav-item ">
                    <a
                    href="{{url('/specialty')}}"
                    class="nav-link rounded-0 {{url('/specialty') == url()->full() ? "active": ''}} ">
                    <i class="nav-icon fas fa-address-card"></i>
                    <p>
                        Specialty
                    </p>
                    </a>
                </li>
            @endif
                @if (auth()->user()->role == 0)
                <li class="nav-item ">
                    <a
                    href="{{url('/company-specialty')}}"
                    class="nav-link rounded-0 {{url('/company-specialty') == url()->full() ? "active": ''}} ">
                    <i class="nav-icon fas fa-building"></i>
                    <p>
                        Company Specialty

                    </p>
                    </a>
                </li>
                @endif

                <li class="nav-item">
                     <a class="nav-link rounded-0" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>Logout</p>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>


        </ul>
      </nav>


      <nav class="mt-2">
        <ul
        class="nav nav-pills nav-sidebar flex-column"
        data-widget="treeview"
        role="menu"
        data-accordion="false"
        >


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

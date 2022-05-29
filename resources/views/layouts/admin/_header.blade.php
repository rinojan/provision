   <!-- partial:partials/_navbar.html -->
   <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
      <p class=h5>Web-based Service Provision</p>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>

        <ul class="navbar-nav navbar-nav-right">
           <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="{{ asset('images/faces/face28.jpg') }} " alt="profile"/>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">

              @if(Auth::user()->role->name=='Employee')
              <a class="dropdown-item"  href="{{ route('employee.edit',Auth::user()->employee->id) }}">
                <i class="mdi mdi-account-circle text-primary"></i>
                Profile
              </a>
              @else

              <a class="dropdown-item"  href="{{ route('user.edit',Auth::user()->id) }}">
                <i class="mdi mdi-account-circle text-primary"></i>
                Profile
              </a>

             @endif

              <a class="dropdown-item"  href="{{ route('logout') }}"
                    onclick= "event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                <i class="ti-power-off text-primary"></i>
                 Logout
              </a>

            
            </div>
          </li>
          <li class="nav-item nav-settings d-none d-lg-flex">
            <a class="nav-link" href="#">
              <i class="icon-ellipsis"></i>
            </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
  
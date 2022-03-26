
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }} ">
              <i class="menu-icon mdi mdi-grid"></i>
         
              <!-- <i class="fas fa-tachometer-alt"></i>  -->
              <span class="menu-title">Dashboard</span>
            </a>
        
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
            <i class="menu-icon mdi mdi-briefcase-check"></i>
              <span class="menu-title">JobCategory</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="{{ route('jobcategory.index') }}">Add JobCategory </a></li>
              </ul>
            </div>
          </li>


          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
            <i class="menu-icon mdi mdi-briefcase"></i>

              <span class="menu-title">Job</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route ('job.index')  }}">Add Jobs</a></li>
              </ul>
            </div>
          </li>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-user" aria-expanded="false" aria-controls="form-user">
            <i class=" menu-icon mdi mdi-account-multiple"> </i>
              <span class="menu-title">User</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-user">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="{{ route('user.index') }}">Admin</a></li>
              </ul>
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="{{ route('employee.index') }}">Employee </a></li>
              </ul>
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="{{ route('customer.index') }}">Customer </a></li>
              </ul>
            </div>
          </li>


            </a>
          </li>
        </ul>
      </nav>
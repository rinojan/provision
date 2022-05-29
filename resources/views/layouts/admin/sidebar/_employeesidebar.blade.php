


      <nav class="sidebar sidebar-offcanvas" id="sidebar">
         <ul class="nav">      
          <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}">
              <i class="menu-icon mdi mdi-grid"></i>       
              <span class="menu-title" class="selected|">Dashboard</span>
            </a>
         
        

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic3" aria-expanded="false" aria-controls="ui-basic">
            <i class="menu-icon mdi mdi-calendar-check"></i>
              <span class="menu-title">Order</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic3">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route ('order.eindex')  }}">Order</a></li>
              </ul>
            </div>
          </li>






          </ul>
      </nav>

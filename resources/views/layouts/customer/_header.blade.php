<header class="main-header " id="header">
            <nav class="navbar navbar-static-top navbar-expand-lg">
              <!-- Sidebar toggle button -->
              <button id="sidebar-toggler" class="sidebar-toggle">
                <span class="sr-only">Toggle navigation</span>
              </button>
              <!-- search form -->
              <div class="search-form d-none d-lg-inline-block">
                
                <div id="search-results-container">
                  <ul id="search-results"></ul>
                </div>
              </div>

              <div class="navbar-right ">
                <ul class="nav navbar-nav">
                  <!-- Github Link Button -->
                  
                  <!-- User Account -->
                    <li class="dropdown user-menu">
                    <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                  
                    <span class="d-none d-lg-inline-block">{{Auth::user()->customer->firstname." ".Auth::user()->customer->lastname}}</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <!-- User image -->
                      <li class="dropdown-header">
                    
                        <div class="d-inline-block">
                        {{Auth::user()->customer->firstname." ".Auth::user()->customer->lastname}} 
                        <small class="pt-1">{{ Auth::user()->email }} </small>
                        </div>
                      </li>
                      <li>
                        <a href="{{route('customer.editc',Auth::user()->customer->id)}}">
                          <i class="mdi mdi-account"></i> My Profile
                        </a>
                      </li>
                     
                      <li>
                        <a href="{{ route('order.cindex') }}"> <i class="mdi mdi-calendar-check"></i> My Orders </a>
                      </li>

                   
                      

                      <li class="dropdown-footer">
                          <a class="dropdown-item"  href="{{ route('logout') }}"
                          onclick= "event.preventDefault();
                          document.getElementById('logout-form').submit();">

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                          </form>
                          <i class="mdi mdi-logout"></i>
                          Log Out
                        </a>
                      </li>

                    </ul>
                  </li>
                </ul>
              </div>
            </nav>


          </header>
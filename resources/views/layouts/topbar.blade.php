    <!-- Navbar-->
   <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
       <a class="navbar-brand" href="index.html">Sifafoodie</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>            
       <!-- Navbar Search-->
       <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
           
       </form>                        
       <ul class="navbar-nav ml-auto ml-md-0">
           <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                @if(empty(Auth::user()->name))
                  {{ '' }}
                @else
                  {{ Auth::user()->name }}
                @endif
                </span>
        
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
               @if(Auth::user()->role == 'admin')
                <a class="dropdown-item" href="{{ url('member') }}">
                
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Kelola User
                </a>
               @endif
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
              </div>
            </li>
       </ul>
   </nav>
   <!-- End Navbar -->
        
        <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
          <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <ul class="navbar-nav ml-auto">

            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                @if(auth()->user()->foto)
                <img class="img-profile rounded-circle" src="{{ url('user')}}/{{Auth::user()->foto}}" alt="profile" style="max-width: 60px">
                @else
                <img class="img-profile rounded-circle" src="{{ url('user')}}/user.png" alt="profile" style="max-width: 60px">
                @endif
                <span class="ml-2 d-none d-lg-inline text-white small"> 
                @if(empty(Auth::user()->name))
                    {{ '' }}
                    @else
                    {{ Auth::user()->name }}
                @endif
              </span>
              </a>
              
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
              <a class="dropdown-item" href="#">   
                <center>
                  <span> <b>{{ Auth::user()->name }} </b></span>
                  <br>
                  <span>{{ Auth::user()->role }}</span>
                </center>
              </a>
              <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('profil') }}">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>

                <a class="dropdown-item" href="{{ route('ubah-password') }}">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Ubah Password
                </a>

                <a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                     <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
                
                </form>
              </div>
            </li>
          </ul>
        </nav>
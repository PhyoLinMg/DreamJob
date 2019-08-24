<ul class="sidebar navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="/admin">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-tasks"></i>
          <span>Jobs</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <a class="dropdown-item" href="{{ route('jobadmin') }}">Show</a>
          <a class="dropdown-item" href="{{ route('job.create') }}">Create</a>
          {{-- <div class="dropdown-divider"></div>
          <h6 class="dropdown-header">Other Pages:</h6>
          <a class="dropdown-item" href="404.html">404 Page</a>
          <a class="dropdown-item active" href="blank.html">Blank Page</a> --}}
        </div>
      </li>
      @if(\Auth::user()->role=="admin")
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-building"></i>
          <span>Company</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <a class="dropdown-item" href="{{ route('companyadmin') }}">Show</a>
          <a class="dropdown-item" href="{{ route('company.create') }}">Create</a>
          
          {{-- <div class="dropdown-divider"></div>
          <h6 class="dropdown-header">Other Pages:</h6>
          <a class="dropdown-item" href="404.html">404 Page</a>
          <a class="dropdown-item active" href="blank.html">Blank Page</a> --}}
        </div>
      </li>
      @endif
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-user-md"></i>
          <span>Applications</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <a class="dropdown-item" href="{{ route('jobseekeradmin') }}">Show</a>  
          {{-- <div class="dropdown-divider"></div>
          <h6 class="dropdown-header">Other Pages:</h6>
          <a class="dropdown-item" href="404.html">404 Page</a>
          <a class="dropdown-item active" href="blank.html">Blank Page</a> --}}
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Universities</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <a class="dropdown-item" href="">Show</a>
          <a class="dropdown-item" href="">Create</a>
          
          {{-- <div class="dropdown-divider"></div>
          <h6 class="dropdown-header">Other Pages:</h6>
          <a class="dropdown-item" href="404.html">404 Page</a>
          <a class="dropdown-item active" href="blank.html">Blank Page</a> --}}
        </div>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="{{ route('adminregister') }}">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Admin Register</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('chat') }}">
          <i class="fas fa-fw fa-comment"></i>
          <span>Chat</span></a>
      </li>
    </ul>
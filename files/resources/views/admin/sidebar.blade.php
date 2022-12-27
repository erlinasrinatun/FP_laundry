<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
      <div class="sidebar-brand-icon">
      </div>
      <img src="{{url('img/foto/logo1.png')}}" style="width: 30%" rel="icon">
      <div class="sidebar-brand-text mx-3">SI Laundry</div>
    </a>

    <hr class="sidebar-divider my-0">
      <li class="nav-item active">
        <a class="nav-link" href="{{url('/dashboard')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{url('/jenis')}}">
          <i class="far fa-fw fa-window-maximize"></i>
          <span>Jenis Laundry</span>
        </a>
      </li>
	
	<li class="nav-item">
        <a class="nav-link" href="{{url('/transaksi')}}">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Transaksi</span>
        </a>
      </li>


      @if(auth()->user()->role==='admin')
      <br>
      <div class="sidebar-heading">Manage User</div>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/users')}}">
            <i class="fas fa-fw fa-users"></i>
            <span>User</span>
          </a>
        </li>
      @endif

</ul>
  <nav class="sidebar sidebar-offcanvas" id="sidebar">

    <ul class="nav">
      <li class="nav-item nav-category">
        <span class="nav-link">Navigation</span>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{route('adminhome')}}">
          <span class="menu-icon">
            <span class="mdi mdi-view-dashboard"></span>
          </span>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{route('user')}}">
          <span class="menu-icon">
            <span class="mdi mdi-account-group"></span>
          </span>
          <span class="menu-title">Users</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <span class="menu-icon">
            <span class="mdi mdi-hamburger"></span>
          </span>
          <span class="menu-title">Foods</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route('food.add')}}">Add Food</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('foods')}}">All Foods</a></li>
          </ul>
        </div>
      </li>
    <li class="nav-item menu-items">
        <a class="nav-link" data-bs-toggle="collapse" href="#chef" aria-expanded="false" aria-controls="chef">
          <span class="menu-icon">
            <i class="mdi mdi-chef-hat"></i>
          </span>
          <span class="menu-title">Chefs</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="chef">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route('chef.add')}}">Add Chef</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('chefs')}}">All Chefs</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
          <span class="menu-icon">
            <i class="mdi mdi-security"></i>
          </span>
          <span class="menu-title">Account</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="auth">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="#">Profile</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('logout')}}">Logout</a></li>
          </ul>
        </div>
      </li>
    </ul>
  </nav>



<!-- top navigation -->
<div class="top_nav">
  <div class="nav_menu">
    <div class="nav toggle">
      <a id="menu_toggle"><i class="fa fa-bars"></i></a>
    </div>
    <nav class="nav navbar-nav">
      <ul class=" navbar-right">
        <li class="nav-item dropdown open" style="padding-left: 15px;">
          <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
            <img src="{{asset('images/Loginlogo.png')}}" alt="">{{ Auth()->user()->first_name ?? ''}} {{ Auth()->user()->last_name ?? ''}}
          </a>
          <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
           
            <a class="dropdown-item" id="notification-button">  <span class="badge badge-danger" id="notification-count">0</span><i class="fa fa-bell-o pull-right"></i>Notifications</a>
            
            <a class="dropdown-item" href="" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out pull-right" ></i> Log Out</a>
            <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">
              @csrf
            </form>
          </div>
        </li>
      </ul>
    </nav>
  </div>
</div>


<!-- Notification dropdown -->
<div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown" id="notification-dropdown">
  <!-- Dropdown content will be added dynamically with JavaScript -->
</div>


 

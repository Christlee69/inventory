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
          <img src="{{ asset('uploads/profilepic/' . (auth()->user()->profilepic ?? 'userprof.png')) }}" alt="User image" class="rounded mx-auto d-block" style="width: 30px; height: 30px;  border-radius: 50%;">
{{ Auth()->user()->first_name ?? 'Guest'}} {{ Auth()->user()->last_name ?? ''}}
          </a>
          <div class="dropdown-menu dropdown-usermenu dropdown-menu-left" aria-labelledby="navbarDropdown">
          
           
          <button id="refreshButton">
    <i class="fa fa-refresh"></i>
  </button><button id="closeButton" class="fa fa-close"></button>
          <a class="dropdown-item" id="messagesButton">
          
  <i class="fa fa-bell"></i> Notificiations
</a>


<div id="messagesDropdown" class="dropdown-menu dropdown-menu-left">

  

  <ul id="messagesList" class="list-group">
    
    <!-- Generated dropdown list items will be inserted here -->
  </ul>

  
</div>




            
@if(auth()->check())
    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <i class="fa fa-sign-out"></i> Log Out
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
@else
    <a class="dropdown-item" href="{{ route('login') }}">
        <i class="fa fa-sign-in"></i> Log In
    </a>
@endif


          </div>
        </li>
      </ul>
    </nav>
  </div>
</div>
<style>
#messagesDropdown {
  position: relative;
}

#closeButton {
  position: absolute;
  right: 10px;
  border: none;
  background: none;
  color: #000;
  font-size: 12px;
  cursor: pointer;
  
}
</style>
@include('layouts.scripts.messages-script')



 
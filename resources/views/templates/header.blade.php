<div class="top-header">
    <span>
         @if(Auth::check())
             <i class="fa fa-user-circle-o fa-1x"></i>&nbsp; {{Auth::user()->name}} &nbsp;|&nbsp;
             <form id="logout-form" method="post" action={{route('logout')}} style="display: inline;">
                 {{csrf_field()}}
             </form>
             <a href={{route('logout')}} onClick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                 Logout
             </a>
         @else
             <a href={{route('login')}}><i class="fa fa-sign-in"></i>&nbsp; Login</a>
         @endif
  </span>
</div>

<div class="custom-navbar">
  <nav class="navbar navbar-default navbar-static-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar3">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"><img src={{asset('assets/images/ugm_header.png')}} alt="UGM">
        </a>
        <p class="navbar-brand-title">
        Sistem Informasi<br>
        Fakultas Peternakan UGM
        </p>
      </div>

      <div id="navbar3" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-left">
          
          <li {{Request::is('/')?'class=active':''}}>
            <a href={{url('/')}}>Home</a>
          </li>
          <li {{Request::is('users')?'class=active':''}}>
            <a href={{route('users.index')}}>User</a>
          </li>
          <li>
            <a href="#">Setting</a>
          </li>
          
          
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li class="divider"></li>
              <li class="dropdown-header">Nav header</li>
              <li><a href="#">Separated link</a></li>
              <li><a href="#">One more separated link</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
    <!--/.container-fluid -->
  </nav>
</div>

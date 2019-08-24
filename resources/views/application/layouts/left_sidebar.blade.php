    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
          <li class="nav-item mr-auto"><a class="navbar-brand">
              <div class="brand-logo"></div>
              <h2 class="brand-text mb-0">LifeBoostr</h2></a></li>
          <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
        </ul>application/
      </div>
      <div class="shadow-bottom"></div>
      <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
          <li class="request()->is('/')?'active':'' nav-item"><a href="index.html"><i class="feather icon-info"></i><span class="menu-title" data-i18n="Dashboard">About</span></a>

          </li>
          <li class=" navigation-header"><span>Dashboard</span>
          </li>
          <li class="{{request()->is('career')?'active':''}} nav-item"><a href="{{route('career')}}"><i class="feather icon-bar-chart"></i><span class="menu-title" data-i18n="Email">Career & Finance</span></a>
          </li>
          <li class=" nav-item"><a href="health.html"><i class="feather icon-heart"></i><span class="menu-title" data-i18n="Chat">Health</span></a>
          </li>
          <li class=" nav-item"><a href="relationship.html"><i class="feather icon-users"></i><span class="menu-title" data-i18n="Todo">Relationships</span></a>
          </li>
          <li class=" nav-item"><a href="home.html"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Calender">Home</span></a>
          </li>
          <li class="{{request()->is('children')?'active':''}} nav-item"><a href="{{route("children")}}"><i class="feather icon-user"></i><span class="menu-title" data-i18n="Ecommerce">Children</span></a>

          </li>
            <li class=" nav-item"><a href="innerjoy.html"><i class="feather icon-sun"></i><span class="menu-title" data-i18n="Calender">Inner Joy</span></a>
          </li>
          
        </ul>
      </div>
    </div>
    <!-- END: Main Menu-->
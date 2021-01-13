 <!-- Page Preloder -->
 <div id="preloder">
     <div class="loader">
         <img src="img/logo.png" alt="">
         <h2>Loading.....</h2>
     </div>
 </div>

 <header class="header-section">
     <div class="logo">
         <img src="{{ asset('img/logo/' . $logo->img_resize) }}" alt="">
     </div>
     <!-- Navigation -->
     <div class="responsive"><i class="fa fa-bars"></i></div>
     <nav>
         <ul class="menu-list d-flex">
             <li class="{{ Request::is($navs[0]->link) ? 'active' : '' }}">
                 <a href="/home">{{ ucfirst(trans($navs[0]->link)) }}</a>
             <li class="{{ Request::is($navs[1]->link) ? 'active' : '' }}">
                 <a href="/services">{{ ucfirst(trans($navs[1]->link)) }}</a>
             <li class="{{ Request::is($navs[2]->link) ? 'active' : '' }}">
                 <a href="/blog">{{ ucfirst(trans($navs[2]->link)) }}</a>
             <li class="{{ Request::is($navs[3]->link) ? 'active' : '' }}">
                 <a href="/contact">{{ ucfirst(trans($navs[3]->link)) }}</a>
             <li>
                 <a href="/admin">Admin</a>
             </li>
             <li>
                 <a href="/login">Log in</a>
             </li>
             @auth
                 <li class="nav-item dropdown">
                     <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                         aria-haspopup="true" aria-expanded="false" v-pre>
                         {{ Auth::user()->last_name }}
                     </a>

                     <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                         <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                             {{ __('Logout') }}
                         </a>

                         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                             @csrf
                         </form>
                     </div>
                 </li>
             @endauth
         </ul>
     </nav>
 </header>

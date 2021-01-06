 <!-- Page Preloder -->
 <div id="preloder">
     <div class="loader">
         <img src="img/logo.png" alt="">
         <h2>Loading.....</h2>
     </div>
 </div>

 <header class="header-section">
     <div class="logo">
         <img src="{{ asset('img/logo/' . $logos[0]->img_resize) }}" alt=""><!-- Logo -->
     </div>
     <!-- Navigation -->
     <div class="responsive"><i class="fa fa-bars"></i></div>
     <nav>
         <ul class="menu-list">
             @foreach ($navs as $nav)
                 <li class="{{ Request::is($nav->link) ? 'active' : '' }}"><a
                         href="/{{ $nav->link }}">{{ ucfirst(trans($nav->link)) }}</a></li>
             @endforeach
             <li><a href="/admin">Admin</a></li>
         </ul>
     </nav>
 </header>

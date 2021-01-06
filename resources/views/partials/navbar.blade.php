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
             <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="/">{{ $navs[0]->link }}</a></li>
             <li class="{{ Request::is('services') ? 'active' : '' }}"><a href="/services">{{ $navs[1]->link }}</a></li>
             <li class="{{ Request::is('blog') ? 'active' : '' }}"><a href="/blog">{{ $navs[2]->link }}</a></li>
             <li class="{{ Request::is('contact') ? 'active' : '' }}"><a href="/contact">{{ $navs[3]->link }}</a></li>
             <li><a href="/admin">Admin</a></li>
         </ul>
     </nav>
 </header>

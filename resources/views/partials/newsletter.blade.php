 <!-- newsletter section -->
 <div class="newsletter-section spad">
     @if ($errors->any())
         <div class="alert alert-danger">
             <ul class="mb-0">
                 @foreach ($errors->all() as $error)
                     <li>{{ $error }}</li>
                 @endforeach
             </ul>
         </div>
     @endif
     <div class="container">
         <div class="row">
             <div class="col-md-3">
                 <h2>Newsletter</h2>
             </div>
             <div class="col-md-9">
                 @guest
                     <form class="nl-form" action="/admin/newsletter" method="POST">
                         @csrf
                         <input type="text" placeholder="Your e-mail here" name="email">
                         <button class="site-btn btn-2">Newsletter</button>
                     </form>
                 @endguest
                 @auth
                     <form class="nl-form">
                         <h1>Vous êtes inscript !</h1>
                     </form>
                 @endauth
             </div>
         </div>
     </div>
 </div>
 <!-- newsletter section end-->

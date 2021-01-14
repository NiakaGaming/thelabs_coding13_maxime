 <!-- features section -->
 <div class="team-section spad">
     <div class="overlay"></div>
     <div class="container">
         <div class="section-title">
             <h2>Get in <span>the Lab</span> and discover the world</h2>
         </div>
         <div class="row">
             <!-- feature item -->
             <div class="col-md-4 col-sm-4 features">
                 {{-- 3 ITEMS --}}
                 @foreach ($services_prime_1 as $prime_1)
                     <div class="icon-box light left">
                         <div class="service-text">
                             <h2>{{ $prime_1->title }}</h2>
                             <p>{{ $prime_1->text }}</p>
                         </div>
                         <div class="icon">
                             <i class="{{ $prime_1->icon->class }}"></i>
                         </div>
                     </div>
                 @endforeach
             </div>
             <!-- Devices -->
             <div class="col-md-4 col-sm-4 devices">
                 <div class="text-center">
                     <img src="img/device.png" alt="">
                 </div>
             </div>
             <!-- feature item -->
             <div class="col-md-4 col-sm-4 features">
                 {{-- 3 OTHER ITEMS --}}
                 @foreach ($services_prime_2 as $prime_2)
                     <div class="icon-box light">
                         <div class="service-text">
                             <h2>{{ $prime_2->title }}</h2>
                             <p>{{ $prime_2->text }}</p>
                         </div>
                         <div class="icon">
                             <i class="{{ $prime_2->icon->class }}"></i>
                         </div>
                     </div>
                 @endforeach
             </div>
         </div>
         <div class="text-center mt100">
             <a href="" class="site-btn">{!! $titles[4]->title !!}</a>
         </div>
     </div>
 </div>
 <!-- features section end-->

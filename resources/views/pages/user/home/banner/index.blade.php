 <!-- Intro Section -->
 <div class="hero-section">
     <div class="hero-content">
         <div class="hero-center">
             <img src="{{ asset('img/logo/' . $logos[0]->img) }}" alt="">
             <p>{!! $titles[0]->title !!}</p>
         </div>
     </div>
     <!-- slider -->
     <div id="hero-slider" class="owl-carousel">
         <div class="item  hero-item" data-bg="{{ asset('/img/carousel/' . $carousels[0]->img) }}"></div>
         <div class="item  hero-item" data-bg="{{ asset('/img/carousel/' . $carousels[1]->img) }}"></div>
     </div>
 </div>
 <!-- Intro Section -->

 <!-- Intro Section -->
 <div class="hero-section">
     <div class="hero-content">
         <div class="hero-center">
             <img src="{{ asset('img/logo/' . $logo->img) }}" alt="">
             <p>{!! $titles[0]->title !!}</p>
         </div>
     </div>
     <!-- slider -->
     <div id="hero-slider" class="owl-carousel">
         @foreach ($carousels as $carousel)
             <div class="item  hero-item" data-bg="{{ asset('/img/carousel/' . $carousel->img) }}"></div>
         @endforeach
     </div>
 </div>
 <!-- Intro Section -->

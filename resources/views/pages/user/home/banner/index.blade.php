 <!-- Intro Section -->
 <div class="hero-section">
     <div class="hero-content">
         <div class="hero-center">
             @if ($logos[0]->img == 'empty')
                 <img src="https://tecnovivasoft.com/Design%20Studio/img/big-logo.png" alt="">
             @else
                 <img src="{{ asset('img/logo/' . $logos[0]->img) }}" alt="">
             @endif
             <p>{!! $titles[0]->title !!}</p>
         </div>
     </div>
     <!-- slider -->
     <div id="hero-slider" class="owl-carousel">
         @if ($carousels->isEmpty())
             <div class="item  hero-item" data-bg="https://picsum.photos/1920/1274"></div>
             <div class="item  hero-item" data-bg="https://picsum.photos/1920/1278"></div>
         @else
             <div class="item  hero-item" data-bg="{{ asset('/img/carousel/' . $carousels[0]->img) }}"></div>
             <div class="item  hero-item" data-bg="{{ asset('/img/carousel/' . $carousels[1]->img) }}"></div>
         @endif
     </div>
 </div>
 <!-- Intro Section -->

 <!-- Testimonial section -->
 <div class="testimonial-section pb100">
     <div class="test-overlay"></div>
     <div class="container">
         <div class="row justify-content-end">
             <div class="col-md-8 col-md-offset-4">
                 <div class="section-title left">
                     <h2>{!! $titles[2]->title !!}</h2>
                 </div>
                 <div class="owl-carousel" id="testimonial-slide">
                     @foreach ($testimonials as $testimonial)
                         <!-- single testimonial -->
                         <div class="testimonial">
                             <span>‘​‌‘​‌</span>
                             <p>{{ $testimonial->text }}
                             </p>
                             <div class="client-info">
                                 <div class="avatar">
                                     <img src="{{ 'img/team/' . $testimonial->team->img }}" alt="">
                                 </div>
                                 <div class="client-name">
                                     <h2>{{ $testimonial->team->last_name }} {{ $testimonial->team->first_name }}</h2>
                                     <p>{{ $testimonial->function }}</p>
                                 </div>
                             </div>
                         </div>
                     @endforeach
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- Testimonial section end-->

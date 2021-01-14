 <!-- services section -->
 <div class="services-section spad">
     <div class="container" id="service">
         <div class="section-title dark">
             <h2>Get in <span>the Lab</span> and see the services</h2>
         </div>
         <div class="row">
             @foreach ($services as $service)
                 <div class="col-md-4 col-sm-6">
                     <div class="service">
                         <div class="icon">
                             <i class="{{ $service->icon->class }}"></i>
                         </div>
                         <div class="service-text">
                             <h2>{{ $service->title }}</h2>
                             <p>{{ $service->text }}</p>
                         </div>
                     </div>
                 </div>
             @endforeach
         </div>
         <div class="d-flex justify-content-center mb-5">
             {{ $services->fragment('service')->links('vendor.pagination.bootstrap-4') }}
         </div>
         <div class="text-center">
             <a href="#service_prime" class="site-btn">Browse</a>
         </div>
     </div>
 </div>
 <!-- services section end -->

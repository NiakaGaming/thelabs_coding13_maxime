 <!-- services card section-->
 <div class="services-card-section spad" id="blog_quick">
     <div class="container">
         <div class="row">
             @foreach ($blog_quick as $article)
                 <!-- Single Card -->
                 <div class="col-md-4 col-sm-6">
                     <div class="sv-card">
                         <div class="card-img">
                             <img src="{{ asset('img/article/' . $article->img) }}" alt="">
                         </div>
                         <div class="card-text">
                             <h2>{{ $article->title }}</h2>
                             <p>{{ $blog_quick_smummary[$loop->iteration - 1] }}</p>
                         </div>
                     </div>
                 </div>
             @endforeach
         </div>
     </div>
 </div>
 <!-- services card section end-->

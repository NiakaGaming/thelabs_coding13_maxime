 <!-- page section -->
 <div class="page-section spad">
     <div class="container">
         <div class="row">
             <div class="col-md-8 col-sm-7 blog-posts">

                 {{-- ARTICLES --}}
                 @foreach ($articles as $article)
                     <!-- Post item -->
                     <div class="post-item">
                         <div class="post-thumbnail">
                             <img src="{{ asset('img/article/' . $article->img) }}" alt="">
                             <div class="post-date">
                                 <h2>03</h2>
                                 <h3>Nov 2017</h3>
                             </div>
                         </div>
                         <div class="post-content">
                             <h2 class="post-title">{{ $article->title }}</h2>
                             <div class="post-meta"> <a href="">
                                     @forelse ($article->categorie as $categorie)
                                         @if (!$loop->last)
                                             {{ $categorie->label }},
                                         @else
                                             {{ $categorie->label }}
                                         @endif
                                     @empty Pas de catégorie
                 @endforelse
                 </a>
                 <a href="">
                     @forelse ($article->tag as $tag)
                         @if (!$loop->last)
                             {{ $tag->label }},
                         @else
                             {{ $tag->label }}
                         @endif
                     @empty Pas de tag
                     @endforelse
                 </a>
                 <div class="d-none">{{ $a = 0 }}</div>
                 @foreach ($comments as $comment)
                     @if ($comment->article_id == $article->id)
                         <div class="d-none"> {{ $a++ }}</div>
                     @endif
                 @endforeach
                 <a href="">{{ $a }} Comments</a>
             </div>
             <p>{{ $article->text }}</p>
             <a href="/comment/{{ $article->id }}" class="read-more">Read More</a>
         </div>
     </div>
     @endforeach
     {{-- END ARTICLE --}}

     <!-- Pagination -->
     <div class="page-pagination">
         <a class="active" href="">01.</a>
         <a href="">02.</a>
         <a href="">03.</a>
     </div>
 </div>
 <!-- Sidebar area -->
 <div class="col-md-4 col-sm-5 sidebar">
     <!-- Single widget -->
     <div class="widget-item">
         <form action="#" class="search-form">
             <input type="text" placeholder="Search">
             <button class="search-btn"><i class="flaticon-026-search"></i></button>
         </form>
     </div>
     <!-- Single widget -->
     <div class="widget-item">
         <h2 class="widget-title">Categories</h2>
         <ul>
             @foreach ($categories as $categorie)
                 <li><a href="#">{{ $categorie->label }}</a></li>
             @endforeach
         </ul>
     </div>
     <!-- Single widget -->
     <div class="widget-item">
         <h2 class="widget-title">Instagram</h2>
         <ul class="instagram">
             <li><img src="img/instagram/1.jpg" alt=""></li>
             <li><img src="img/instagram/2.jpg" alt=""></li>
             <li><img src="img/instagram/3.jpg" alt=""></li>
             <li><img src="img/instagram/4.jpg" alt=""></li>
             <li><img src="img/instagram/5.jpg" alt=""></li>
             <li><img src="img/instagram/6.jpg" alt=""></li>
         </ul>
     </div>
     <!-- Single widget -->
     <div class="widget-item">
         <h2 class="widget-title">Tags</h2>
         <ul class="tag">
             @foreach ($tags as $tag)
                 <li><a href="">{{ $tag->label }}</a></li>
             @endforeach
         </ul>
     </div>
     <!-- Single widget -->
     <div class="widget-item">
         <h2 class="widget-title">Quote</h2>
         <div class="quote">
             <span class="quotation">‘​‌‘​‌</span>
             <p>Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit
                 metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique. Sed lacinia
                 turpis at ultricies vestibulum.</p>
         </div>
     </div>
     <!-- Single widget -->
     <div class="widget-item">
         <h2 class="widget-title">Add</h2>
         <div class="add">
             <a href=""><img src="img/add.jpg" alt=""></a>
         </div>
     </div>
 </div>
 </div>
 </div>
 </div>
 <!-- page section end-->

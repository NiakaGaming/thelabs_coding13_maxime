 <!-- Page header -->
 <div class="page-top-section">
     <div class="overlay"></div>
     <div class="container text-right">
         <div class="page-info">
             <h2>{{ Str::upper(Request::path()) }}</h2>
             <div class="page-links">
                 <a href="/">Home</a>
                 <span>{{ ucfirst(trans(Request::path())) }}</span>
             </div>
         </div>
     </div>
 </div>
 <!-- Page header end-->

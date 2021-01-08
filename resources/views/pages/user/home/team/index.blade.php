 <!-- Team Section -->
 <div class="team-section spad">
     <div class="overlay"></div>
     <div class="container">
         <div class="section-title">
             <h2>{!! $titles[4]->title !!}</h2>
         </div>
         <div class="row">
             <!-- single member -->
             <div class="col-sm-4">
                 <div class="member">
                     <img src="{{ asset('img/team/' . $random_team_1[0]->img) }}" alt="">
                     <h2>{{ $random_team_1[0]->last_name }} {{ $random_team_1[0]->first_name }}</h2>
                     <h3>{{ $random_team_1[0]->function }}</h3>
                 </div>
             </div>
             <!-- single member -->
             <div class="col-sm-4">
                 <div class="member">
                     <img src="{{ asset('img/team/' . $choice->team->img) }}" alt="">
                     <h2>{{ $choice->team->last_name }} {{ $choice->team->first_name }}</h2>
                     <h3>{{ $choice->team->function }}</h3>
                 </div>
             </div>
             <!-- single member -->
             <div class="col-sm-4">
                 <div class="member">
                     <img src="{{ asset('img/team/' . $random_team_2[0]->img) }}" alt="">
                     <h2>{{ $random_team_2[0]->last_name }} {{ $random_team_2[0]->first_name }}</h2>
                     <h3>{{ $random_team_2[0]->function }}</h3>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- Team Section end-->

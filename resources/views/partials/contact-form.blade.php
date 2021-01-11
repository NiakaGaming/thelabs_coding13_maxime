 <!-- Contact section -->
 <div class="contact-section spad fix" id="contact-form">
     <div class="container">
         <div class="row">
             <!-- contact info -->
             <div class="col-md-5 col-md-offset-1 contact-info col-push">
                 <div class="section-title left">
                     <h2>{{ $contact_form->title }}</h2>
                 </div>
                 <p>{{ $contact_form->text }}</p>
                 <h3 class="mt60">{{ $contact_form->info_title }}</h3>
                 <p class="con-item">{!! $contact_form->adress !!}</p>
                 <p class="con-item">{{ $contact_form->phone }}</p>
                 <p class="con-item">{{ $contact_form->email }}</p>
             </div>
             <!-- contact form -->
             <div class="col-md-6 col-pull">
                 <form class="form-class" id="con_form">
                     <div class="row">
                         <div class="col-sm-6">
                             <input type="text" name="name" placeholder="Your name">
                         </div>
                         <div class="col-sm-6">
                             <input type="text" name="email" placeholder="Your email">
                         </div>
                         <div class="col-sm-12">
                             <input type="text" name="subject" placeholder="Subject">
                             <textarea name="message" placeholder="Message"></textarea>
                             <button class="site-btn">{{ $contact_form->btn }}</button>
                         </div>
                     </div>
                 </form>
             </div>
         </div>
     </div>
 </div>
 <!-- Contact section end-->

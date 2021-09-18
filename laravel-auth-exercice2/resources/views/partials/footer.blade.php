   <!-- Footer-->
   @foreach ( $footers as $footerData )
       
   <footer class="footer text-center">
       <div class="container">
           <div class="row">
               <!-- Footer Location-->
               <div class="col-lg-4 mb-5 mb-lg-0">
                   <h4 class="text-uppercase mb-4">Location</h4>
                   <p class="lead mb-0">
                       {{$footerData->street}}
                       <br />
                       {{$footerData->city}}
                   </p>
               </div>
               <!-- Footer Social Icons-->
               <div class="col-lg-4 mb-5 mb-lg-0">
                   <h4 class="text-uppercase mb-4">Around the Web</h4>
                   <a
                       class="btn btn-outline-light btn-social mx-1"
                       href="#!"
                       ><i class="fab fa-fw fa-facebook-f"></i
                   ></a>
                   <a
                       class="btn btn-outline-light btn-social mx-1"
                       href="#{{$footerData->twitter}}"
                       ><i class="fab fa-fw fa-twitter"></i
                   ></a>
                   <a
                       class="btn btn-outline-light btn-social mx-1"
                       href="#{{$footerData->linkedin}}"
                       ><i class="fab fa-fw fa-linkedin-in"></i
                   ></a>
                   <a
                       class="btn btn-outline-light btn-social mx-1"
                       href="#{{$footerData->dribble}}"
                       ><i class="fab fa-fw fa-dribbble"></i
                   ></a>
               </div>
               <!-- Footer About Text-->
               <div class="col-lg-4">
                   <h4 class="text-uppercase mb-4">About Freelancer</h4>
                   <p class="lead mb-0">
                       Freelance is a free to use, MIT licensed Bootstrap
                       theme created by
                       <a href="{{$footerData->linkTemplate}}"
                           >Start Bootstrap</a
                       >
                       .
                   </p>
               </div>
           </div>
       </div>
   </footer>
   @endforeach
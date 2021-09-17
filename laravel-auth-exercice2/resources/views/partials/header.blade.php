          
                @foreach ($headerDatas as $data )
                       
                <header class="masthead bg-primary text-white text-center">
                      <div class="container d-flex align-items-center flex-column">
                          <!-- Masthead Avatar Image-->
                          <img
                              class="masthead-avatar mb-5"
                              src="{{asset('assets/img/'.$data->avatar)}}"
                              alt="..."
                          />
                          <!-- Masthead Heading-->
      
                         <h1 class="masthead-heading text-uppercase mb-0">
                             {{$titre->h1Header}}
                         </h1>
                         <!-- Icon Divider-->
                         <div class="divider-custom divider-light">
                             <div class="divider-custom-line"></div>
                             <div class="divider-custom-icon">
                                 <i class="fas fa-star"></i>
                             </div>
                             <div class="divider-custom-line"></div>
                         </div>
                         <!-- Masthead Subheading-->
                         <p class="masthead-subheading font-weight-light mb-0">
                             {{$data->skills}}
                         </p>
                     </div>
                 </header>
                         
                   @endforeach
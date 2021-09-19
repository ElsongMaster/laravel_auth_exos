@extends('backoffice.template.main')






@section('backofficeContent')
          
                @foreach ($datas as $data )
                       @foreach ($titres as $titre)
                           <div class="container mt-5 w-50 h-50 ">

                               <header class="masthead bg-primary text-white text-center ">
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
                                <div class="container d-flex justify-content-center my-5 py-1 ">
                                    <p class="m-0 p-0  "><a href="{{route('header_data.show',$data->id)}}" class="btn btn-warning p-3 rounded  rounded-3 fs-4 text-secondary">SHOW</a></p>
                                </div>
                           </div>
                       @endforeach
                         
                   @endforeach
@endsection
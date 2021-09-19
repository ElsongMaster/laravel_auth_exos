@extends('backoffice.template.main')






@section('backofficeContent')
@foreach ($titres as $titre)
    
<!-- About Section-->
       <section class="page-section bg-primary text-white mt-3 mb-0 " id="about">
           <div class="container">
               <!-- About Section Heading-->
               <h2
                   class="
                       page-section-heading
                       text-center text-uppercase text-white
                   "
               >
                   {{$titre->h2About}}
               </h2>
               <!-- Icon Divider-->
               <div class="divider-custom divider-light">
                   <div class="divider-custom-line"></div>
                   <div class="divider-custom-icon">
                       <i class="fas fa-star"></i>
                   </div>
                   <div class="divider-custom-line"></div>
               </div>
               @foreach ($abouts as $AboutData )
                   
               <!-- About Section Content-->
               <div class="row">
                   <div class="col-lg-4 ms-auto">
                       <p class="lead">
                           {{$AboutData->p1}}
                       </p>
                   </div>
                   <div class="col-lg-4 me-auto">
                       <p class="lead">
                           {{$AboutData->p2}}
                       </p>
                   </div>
               </div>
               <!-- About Section Button-->
               <div class="text-center mt-4">
                   <a
                       class="btn btn-xl btn-outline-light"
                       href="{{$AboutData->link}}"
                   >
                       <i class="fas fa-download me-2"></i>
                       Free Download!
                   </a>
               </div>
               @endforeach
           </div>
        </section>
        <div class="container d-flex justify-content-center my-5 py-1 ">
            <p class="m-0 p-0  "><a href="{{route('abouts.show',$AboutData->id)}}" class="btn btn-warning p-3 rounded  rounded-3 fs-4 text-secondary">SHOW</a></p>
        </div>
   
@endforeach
@endsection
@extends('backoffice.template.main')






@section('backofficeContent')
@foreach ($titres as $titre)
    
<!-- Portfolio Section-->
<section class="page-section portfolio" id="portfolio">
    <div class="container">
        <!-- Portfolio Section Heading-->
        <h2
            class="
                page-section-heading
                text-center text-uppercase text-secondary
                mb-0
            "
        >
           {{$titre->h2Portfolio}}
        </h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon">
                <i class="fas fa-star"></i>
            </div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Portfolio Grid Items-->
        <div class="row justify-content-center">
            @foreach ($projects as $project)
                
            <!-- Portfolio Item 1-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div
                    class="portfolio-item mx-auto"
                    data-bs-toggle="modal"
                    data-bs-target="#{{$project->targetModal}}"
                >
                    <a href="{{route('portfolios.show',$project->id)}}" ><div
                        class="
                            portfolio-item-caption
                            d-flex
                            align-items-center
                            justify-content-center
                            h-100
                            w-100
                        "
                    >
                        <div
                            class="
                                portfolio-item-caption-content
                                text-center text-white
                            "
                            >
                            <span class="text-decoration-underline"> SHOW</span>
                            {{-- <i class="fas fa-plus fa-3x"></i> --}}
                        </div>
                    </div></a>
                    <img
                        class="img-fluid"
                        src="{{asset('assets/img/portfolio/'.$project->imgLink)}}"
                        alt="..."
                    />
                </div>
            </div>
            @endforeach
            {{$projects->links()}}
        </div>
    </div>
</section> 
@endforeach
@endsection
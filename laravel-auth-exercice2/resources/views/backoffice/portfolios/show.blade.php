@extends('backoffice.template.main')






@section('backofficeContent')

<div class="container d-flex justify-content-center align-items-center mt-1 mb-5">
<div class="container d-flex flex-column align-items-center">
    <h1 class="text-center text-uppercase my-2 text-decoration-underline px-2">Détails portfolio</h1>
    <div class="card" style="width: 18rem;">
    @if (Storage::disk('public')->exists('assets/img/portfolio/'.$portfolio->imgLink))
    
    <img src="{{asset('assets/img/portfolio/'.$portfolio->imgLink)}}" class="card-img-top" alt="...">
    @else
    
    <img src="{{$portfolio->imgLink}}" class="card-img-top" alt="...">
    @endif
      <div class="card-body">
        <h5 class="card-title"><span class="text-decoration-underline">ID:</span><span class="text-primary">{{$portfolio->id}}</span></h5>
        <p class="card-text  "><span class="text-decoration-underline">Link Image:</span> <span class="text-primary">{{$portfolio->imgLink}}</span></p>

        <div class="d-flex flex-column align-items-center">

            <div class="d-flex justify-content-center">
                    <a href="{{route('portfolios.edit',$portfolio->id)}}" class="btn btn-warning me-3 mb-3"><i class="fas fa-edit"></i></a>
                    <form action="{{route('portfolios.destroy',$portfolio->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger  "><i class="fas fa-trash-alt"></i></button>
                    </form>
            </div>
                    <a href="{{route('portfolios.index')}}" class="btn btn-primary">Go back</a>
        </div>
        
      </div>
</div>
</div>   
@endsection
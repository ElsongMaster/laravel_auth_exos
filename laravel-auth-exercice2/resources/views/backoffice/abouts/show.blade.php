@extends('backoffice.template.main')






@section('backofficeContent')
<div class="container d-flex justify-content-center align-items-center mt-1 mb-5">
<div class="container d-flex flex-column align-items-center">
    <h1 class="text-center text-uppercase my-2 text-decoration-underline px-2">Détails Abouts</h1>
    <div class="card" style="width: 18rem;">

      <div class="card-body">
        <h5 class="card-title"><span class="text-decoration-underline">ID:</span><span class="text-primary">{{$about->id}}</span></h5>
        <p class="card-text  "><span class="text-decoration-underline">Description1:</span> <span class="text-primary">{{$about->p1}}</span></p>
        <p class="card-text  "><span class="text-decoration-underline">Description2:</span> <span class="text-primary">{{$about->p2}}</span></p>
        <p class="card-text  "><span class="text-decoration-underline">link:</span> <span class="text-primary">{{$about->link}}</span></p>

        <div class="d-flex flex-column align-items-center">

            <div class="d-flex justify-content-center">
                    <a href="{{route('abouts.edit',$about->id)}}" class="btn btn-warning me-3 mb-3"><i class="fas fa-edit"></i></a>
                    <form action="{{route('abouts.destroy',$about->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger  "><i class="fas fa-trash-alt"></i></button>
                    </form>
            </div>
                    <a href="{{route('abouts.index')}}" class="btn btn-primary">Go back</a>
        </div>
        
      </div>
</div>
</div>   
@endsection
@extends('backoffice.template.main')






@section('backofficeContent')
<div class="container d-flex justify-content-center align-items-center mt-1 mb-5">
<div class="container d-flex flex-column align-items-center">
    <h1 class="text-center text-uppercase my-2 text-decoration-underline px-2">Détails footers</h1>
    <div class="card" style="width: 18rem;">

      <div class="card-body">
        <h5 class="card-title"><span class="text-decoration-underline">ID:</span><span class="text-primary">{{$footer->id}}</span></h5>
        <p class="card-text  "><span class="text-decoration-underline">Street:</span> <span class="text-primary">{{$footer->street}}</span></p>
        <p class="card-text  "><span class="text-decoration-underline">City:</span> <span class="text-primary">{{$footer->city}}</span></p>
        <p class="card-text  "><span class="text-decoration-underline">Facebook link:</span> <span class="text-primary">{{$footer->facebbook}}</span></p>
        <p class="card-text  "><span class="text-decoration-underline">Twitter link:</span> <span class="text-primary">{{$footer->twitter}}</span></p>
        <p class="card-text  "><span class="text-decoration-underline">Linkedin link:</span> <span class="text-primary">{{$footer->linkedin}}</span></p>
        <p class="card-text  "><span class="text-decoration-underline">Dribble link:</span> <span class="text-primary">{{$footer->dribble}}</span></p>
        <p class="card-text  "><span class="text-decoration-underline">Template link:</span> <span class="text-primary">{{$footer->linkTemplate}}</span></p>

        <div class="d-flex flex-column align-items-center">

            <div class="d-flex justify-content-center">
                    <a href="{{route('footers.edit',$footer->id)}}" class="btn btn-warning me-3 mb-3"><i class="fas fa-edit"></i></a>
                    <form action="{{route('footers.destroy',$footer->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger  "><i class="fas fa-trash-alt"></i></button>
                    </form>
            </div>
                    <a href="{{route('footers.index')}}" class="btn btn-primary">Go back</a>
        </div>
        
      </div>
</div>
</div>   
@endsection
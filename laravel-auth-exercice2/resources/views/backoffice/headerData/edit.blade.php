@extends('backoffice.template.main')






@section('backofficeContent')
<div class="container d-flex flex-column mb-5 w-75">
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error )
          <li>{{$error}}</li>  
        @endforeach
    </ul>
</div>
@endif


 <h1 class="text-center my-3 text-decoration-underline"> Update header data</h1>

<form action="{{route('header_data.update',$headerData->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')

<div class="mb-3">
    <label for="nom_club" class="form-label">image Avatar</label>
    <input type="file"  class="form-control" id="nom_club" name="nom_club">
</div>

<div class="mb-3">
    <label for="ville" class="form-label">Intitulé poste</label>
    <input type="text" value ="{{$headerData->skills}}"   class="form-control" id="ville" name="ville" >
</div>


<button type="submit" class="btn btn-primary">Submit</button>

</form>  
</div>   
@endsection
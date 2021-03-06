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


 <h1 class="text-center my-3 text-decoration-underline"> Update portfolio data</h1>

<form action="{{route('portfolios.update',$portfolio->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')

<div class="mb-3">
    <label for="nom_club" class="form-label">image Portfolio</label>
    <input type="file"  class="form-control" id="nom_club" name="nom_club">
</div>




<button type="submit" class="btn btn-primary">Submit</button>

</form>  
</div>      
@endsection
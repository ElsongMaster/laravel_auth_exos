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


 <h1 class="text-center my-3 text-decoration-underline"> Update about data</h1>

<form action="{{route('abouts.update',$about->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')

<div class="mb-3">
    <label for="p1" class="form-label">Descritpion1</label>
    <input type="text" value="{{$about->p1}}" class="form-control" id="p1" name="p1">
</div>

<div class="mb-3">
    <label for="p2" class="form-label">Descritpion2</label>
    <input type="text" value="{{$about->p2}}" class="form-control" id="p2" name="p2">
</div>
<div class="mb-3">
    <label for="p2" class="form-label">Link</label>
    <input type="text" value="{{$about->link}}" class="form-control" id="p2" name="p2">
</div>



<button type="submit" class="btn btn-primary">Submit</button>

</form>  
</div> 
@endsection
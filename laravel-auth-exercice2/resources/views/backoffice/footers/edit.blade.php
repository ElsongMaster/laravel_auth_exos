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


 <h1 class="text-center my-3 text-decoration-underline"> Update footer data</h1>

<form action="{{route('footers.update',$footer->id)}}" method="post" >
    @csrf
    @method('PUT')

<div class="mb-3">
    <label for="street" class="form-label">Street</label>
    <input type="text" value="{{$footer->street}}" class="form-control" id="street" name="street">
</div>

<div class="mb-3">
    <label for="city" class="form-label">City</label>
    <input type="text" value="{{$footer->city}}" class="form-control" id="city" name="city">
</div>
<div class="mb-3">
    <label for="facebook" class="form-label"> Facebook Link</label>
    <input type="text" value="{{$footer->facebook}}" class="form-control" id="facebook" name="facebook">
</div>
<div class="mb-3">
    <label for="twitter" class="form-label"> Twitter Link</label>
    <input type="text" value="{{$footer->twitter}}" class="form-control" id="twitter" name="twitter">
</div>
<div class="mb-3">
    <label for="linkedin" class="form-label"> Linkedin Link</label>
    <input type="text" value="{{$footer->linkedin}}" class="form-control" id="linkedin" name="linkedin">
</div>
<div class="mb-3">
    <label for="dribble" class="form-label"> Dribble Link</label>
    <input type="text" value="{{$footer->dribble}}" class="form-control" id="dribble" name="dribble">
</div>


<div class="mb-3">
    <label for="linkTemplate" class="form-label">Link Template</label>
    <input type="text" value="{{$footer->linkTemplate}}" class="form-control" id="linkTemplate" name="linkTemplate">
</div>



<button type="submit" class="btn btn-primary">Submit</button>

</form>  
</div>   
@endsection
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/tailwind.css')}}">
</head>
<body>
    <section class="my-4">
        <h1 class="text-center">User connecté</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Prenom</th>
      <th scope="col">Nom De famille</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">{{Auth::user()->id}}</th>
      <td>{{Auth::user()->firstName}}</td>
      <td>{{Auth::user()->lastName}}</td>
      <td>{{Auth::user()->email}}</td>
    </tr>

  </tbody>
</table>

    </section>
    <section class="my-4">
        <h1 class="text-center">Users inscrits</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Prenom</th>
      <th scope="col">Nom De famille</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($users as $user)
          
      <tr>
        <th scope="row">{{$user->id}}</th>
        <td>{{$user->firstName}}</td>
        <td>{{$user->lastName}}</td>
        <td>{{$user->email}}</td>
      </tr>
      @endforeach

  </tbody>
</table>

    </section>





    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/tailwind.js')}}"></script>
</body>
</html>
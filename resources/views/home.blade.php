
  @extends('layouts.main')

  @section('content')
  <div class="container my-5"> 
    <h1>Hello, World!</h1>
    <div>Also, Hello to <strong>{{ $user }} </strong> and <strong>{{ $user2 }} </strong> !</div>
  </div>
  @endsection


  @extends('layouts.main')
  @section('content')
  <div class="container my-5">
    <h5 >Contuct us: </h5>

    <div>Phone number: {{ $phone }}</div>
    <div>Email: {{ $email }}</div>
    <div>Our addresses:
      <ul> @foreach ($addresses as $address)
        <li>{{ $address }}</li>
        
      @endforeach

      </ul>
      <div>City: {{ $city }}</div>
    </div>
  </div>
  @endsection

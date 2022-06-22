<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        
        <title>About</title>
    </head>
<body>
    <header class="d-flex align-items-center justify-content-between">
      <div class="logo">LOGO</div>
    <ul class="nav justify-content-end">
      <li class="nav-item">
        <a class="nav-link active" href="{{ route('home')}}">HOME</a>
        {{-- <a class="nav-link" href="http://'APP_URL'.'DB_HOST'.:.'DB_PORT'">HOME</a> --}}
      </li>
      <li class="nav-item">
        
        <a class="nav-link" href="{{ route('about')}}">ABOUT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('contact')}}">CONTACT US</a>
      </li>
    </ul>
       
    </header>  

    <main class="container my-5">
      <h5 >About us: </h5>
      <div>Customers working with K Charles are guaranteed:
        All movements are compliant and safe
        Transparent communication
        Dedicated transport planners experienced in all areas of the industry.
        Reliable drivers with extensive geographical knowledge, who you can trust to deliver your goods on time, every time.
        Vehicle tracking system which gives you full visibility from collection to delivery</div>
    </main>

</body>
</html>
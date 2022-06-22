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

    <main>
      <h5 class="container my-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi sit qui enim nihil, impedit perferendis quos alias unde. Numquam dolores non voluptate mollitia molestias minima laborum illum doloremque, ipsa quia.</h5>
    </main>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-body-secondary">
    <div class="container-fluid mx-5">
      <div class="container-fluid">
        <a class="navbar-brand" href="{{route('home')}}">Business Name</a>
      </div>
      <div class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Profilo
        </a>
        <ul class="dropdown-menu dropdown-menu-start  justify-content-center">
          @guest
          <li><a class="dropdown-item" href="{{route('login')}}">Entra</a></li>
          <li><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>
          @endguest
          @auth
          @unless(auth()->user()->hasVerifiedEmail())
          <li><a class="dropdown-item" href="{{route('verification.notice')}}">Verifica E-mail</a></li>
          @endunless
          <li><a class="dropdown-item" href="#" onclick="event.preventDefault();getElementById('logout').submit();">Esci</a>
            <form action="{{route('logout')}}" method="POST" id="logout">
              @csrf</form></li>
              @endauth
            </ul>
          </div>
        </div>
      </nav>
        
        <div class="container text-center mt-5">
        {{$slot}}
    </div>

</body>
</html>
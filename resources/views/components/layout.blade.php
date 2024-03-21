<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Your Business</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-body-secondary">
    <div class="container-fluid mx-5">
      <div>
        <div class="container-fluid">
          <a class="navbar-brand" href="{{route('home')}}">Your Business</a>
        </div>
        <div class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Menù
          </a>
          <ul class="dropdown-menu dropdown-menu-start  justify-content-center">
            @guest
            <li><a class="dropdown-item" href="#">Tutti i piatti</a></li>
            <li><a class="dropdown-item" href="#">Categorie</a></li>
            @endguest
            {{-- Sezione dedicata all'admin --}}
            <li>
              <a class="dropdown-item" href="#">
                {{-- In questa rotta ci sarà l'index di tutte le categorie, ogni categoria avrà le sue azioni di edit/show/delete, e cliccando su ogni categoria si aprirà la lista dei piatti associati, per ogni piatto ci sarà azione edit / delete --}}
                Edit
              </a>
            </li>
            {{-- Fine sezione dedicata all'admin --}}
          </ul>
        </div>
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
            <li>
              <a class="dropdown-item" href="{{route('verification.notice')}}">
                Verifica E-mail
              </a>
            </li>
            @endunless
            <li>
              <a class="dropdown-item" href="#" onclick="event.preventDefault();getElementById('logout').submit();">
                Esci
              </a>
              <form action="{{route('logout')}}" method="POST" id="logout">
                @csrf
              </form>
            </li>
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
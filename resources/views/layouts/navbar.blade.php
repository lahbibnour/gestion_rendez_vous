<!DOCTYPE html>
<head>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    </head>

<nav class="navbar navbar-expand-lg navbar navbar-light" style="background-color: #e3f2fd;">
    <div class="container">
    <img src="/image/medical-logo.jpg" width="80 px" height="80 px" alt="" class="img" border-radius="50 px" >

        <a class="navbar-brand" href="{{ url('/') }}">
           
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            @auth
            <ul class="navbar-nav mr-auto">

               @if(Auth::user()->admin)

                <li><a href="" class="nav-link">Liste des Patient</a></li>
                <li><a href="" class="nav-link">Ordonnance</a></li>
                <li><a href="" class="nav-link">Contact</a></li>

                @else

                <li class="nav-item">
                    <a href="/home" class="nav-link">Accueil</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown09" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">Patient</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown09">
                        <a class="dropdown-item" href="/patient">Liste Patient</a>
                    </div>
                </li>



                <li class="nav-item">
                    <a href="#" class="nav-link">Contact</a>
                </li>
                @endif
                </ul>
            @endauth
           
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                <li class="nav-item">

                    <a class="nav-link" class="" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>

                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                       
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fontes do Google -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet"/>
        
        <!-- Css do Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- Css da Aplicação -->
        <link rel="stylesheet" href="/css/styles.css"/>
    </head>
    <body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
           <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbar">
                    <a class="navbar-brand" href="/">
                        <img src="/img/hdcevents_logo.svg" alt="HDC Events">
                    </a>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link"  href="/">Eventos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/events/create">Criar Eventos</a>
                        </li>
                        @auth
                        <li class="nav-item">
                            <a class="nav-link" href="/dashboard">Meus eventos</a>
                        </li>
                        <li class="nav-item">
                            <form action="/logout" method="POST">
                                @csrf
                                <a class="nav-link" href="/logout" onclick="event.preventDefault();
                                    this.closest('form').submit();">
                                    Sair
                                </a>
                            </form>
                        </li>
                        @endauth
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="/login">Entrar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/register">Cadastrar</a>
                            </li>
                        @endguest
                    </ul>
                </div>
           </div>
        </nav>
    </header>
    <main>
        <div class="container-fluid">
            <div class="row">
                @if(session('msg'))
                    <p class="msg">{{session('msg')}}</p>
                @endif
                @yield('content')
            </div>
        </div>
    </main>
    <footer>
        <p>Laravel Events &copy; 2021</p>
    </footer>
    <script src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
</html>

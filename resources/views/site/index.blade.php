{{-- Front-end começa aqui! --}}
<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('site/css/styles.css') }}" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/8e0b75544f.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="{{ asset('/site/img/favicon.jpg') }}" type="image/x-icon" sizes="32x32" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <title>Contrataki</title>
</head>



<body>
    <button id="scrollToTopBtn" onclick="scrollToTop()">&#9650;</button>
    <header class="header">
        <a class="logo" href="{{ route('site') }}"><img src="{{ asset('/site/img/logo.png') }}" alt=""></a>
        <form class="search" action="{{ url('/search') }}" method="GET">
            <input class="search-field" type="text" name="search" placeholder="Insira um Nome ou Curso:">
            <button class="button primary" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>
        <div class="navbar">
            <ul>
                <li>
                    <div class="dark-mode">
                        <input type="checkbox" class="checkbox" id="checkbox">
                        <label class="label" for="checkbox" id="chk">
                            <i class="fas fa-moon"></i>
                            <i class="fas fa-sun"></i>
                            <div class="ball"></div>
                        </label>
                    </div>
                </li>
                <li class="icons"><a href="{{ route('site') }}"><i class="fa-solid fa-house"></i></a></li>
                <li class="icons"><a href="{{ route('login') }}"><i class="fa-solid fa-user"></i></a></li>
            </ul>
        </div>
    </header>

    <main class="main">
        <h1>LISTA DE ALUNOS</h1>
        <div class="container">
            @foreach($alunos as $aluno)
            <div class="card">
                <img class="card-img" src="{{ url($aluno->imagem) }}" alt="Imagem" />
                <div class="card-info">
                    <h2 class="card-name"><strong>{{ $aluno->nome }}</strong></h2>
                    <p class="card-course"><strong></strong>{{ $aluno->curso->curso }}</p>
                    <p class="card-description"><strong></strong>{{ $aluno->descricao }}</p>
                </div>
                @if($aluno->contratado)
                <button class="button primary" type="button" disabled>CONTRATADO</button>
                @else
                <form action="{{ route('aluno.contratar', $aluno) }}" method="post">
                    @csrf
                    <button class="button primary" type="submit">CONTRATAR</button>
                </form>
                @endif
            </div>

            @endforeach
        </div>
        <div class="pagination">
            {{ $alunos->links() }}
        </div>
    </main>


    <footer>
        <div class="footer_content">
            <p>© 2023, Feito com <i class="fas fa-heart"></i> por Henrique Roas</p>
            <div class="social-icons">
                <a href="https://www.linkedin.com/in/henrique-roas-950116219/" target="_blank"><i class="fab fa-linkedin"></i></a>
                <a href="https://github.com/R0as" target="_blank"><i class="fab fa-github"></i></a>
                <a href="https://www.instagram.com/henriqueroas/" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
        </div>

    </footer>
</body>
<script src="{{ asset('/site/js/script.js') }}">
</script>

</html>
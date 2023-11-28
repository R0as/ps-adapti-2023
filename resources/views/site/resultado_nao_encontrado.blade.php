<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('site/css/styles.css') }}" rel="stylesheet" type="text/css">
  <script src="https://kit.fontawesome.com/8e0b75544f.js" crossorigin="anonymous"></script>
  <link rel="shortcut icon" href="{{ asset('/site/img/favicon.jpg') }}" type="image/x-icon" sizes="32x32" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
  <title>Contrataki</title>
</head>

<body>
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
  <nav class="nao_encontrado">
    <h1>Não há o Nome ou o Curso pesquisado!</h1>
    <h3>Clique no botão abaixo para voltar a página principal!</h3>
    <a href="{{ route('site') }}" class="button primary">Página Principal</a>

  </nav>
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
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="index,follow">
  <meta name="twitter:url" content="/projetos/projeto9_6/index.html">
  <meta name="twitter:title" content="Livraria da Esquina">
  <meta name="twitter:description" content="Livraria da esquina: opções de livros impressos e online , games, seriados e filmes em geral">
  <meta name="facebook:url" content="/var/www/html/laravel/crud/livros.home">
  <meta name="facebook:title" content="Livraria da Esquina">
  <meta name="facebook:description" content="Livraria da esquina: opções de livros impressos e online , games, seriados e filmes em geral">
  <meta name="pinterest:url" content="/var/www/html/laravel/crud/livros.home">
  <meta name="pinterest:title" content="Livraria da Esquina">
  <meta name="pinterest:description" content="Livraria da esquina: opções de livros impressos e online , games, seriados e filmes em geral">
  <meta name="mercadolivre:url" content="/var/www/html/laravel/crud/livros.home">
  <meta name="mercadolivre:title" content="Livraria da Esquina">
  <meta name="mercadolivre:description" content="Livraria da esquina: opções de livros impressos e online , games, seriados e filmes em geral">
  <meta property="og:title" content="Livraria da Esquina">
  <meta property="og:url" content="/var/www/html/laravel/crud/livros.home">
  <meta property="og:image" content="http://localhost:8000/laravel/crud/resources/views/livros/home">
  <meta name="author" content="Juliana Lima">
  <meta name="reply to" content="julianalimab88@gmail.com">
  <meta property="og:discription" content="Livraria da esquina: opções de livros impressos e online , games e filmes em geral">
  <meta property="og:title" content="Livraria da Esquina">
  <meta property="og:keywords" content="Livros impressos e online, games, séries e filmes">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
  integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="http://localhost/laravel/projetoLaravel/public/style.css">
  <link rel="stylesheet" href="localhost/laravel/crud/public/style.css">
  <title>Livros</title>
</head>
<body>
  
<header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="{{ route ('livros.home') }}" >Livraria da Esquina</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" 
        aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
            <li id="homeNav" class="nav-item {{ (Route::current()->getName()=== 'livros.home' ? 'active' : '')}}"
            ><a class="nav-link" href="{{ route ('livros.home') }}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item "><a class="nav-link" href="#"> Contato <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item {{ (Route::current()->getName()=== 'livros.create' ? 'active' : '')}}">
            <a class="nav-link" href="{{ route ('livros.create') }}"
            > Compras <i class="bi bi-cart4 text-white mr-4"></i><span
                  class="sr-only">(current)</span></a><span class="sr-only">(current)</span></a>
            </li>
            </ul>
            <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
    </header>

    <main role="main">
    
      @yield('content')

      <footer class="container-fluid bg-white text-info ">
      
      <div class="container">
      <div class="row  d-flex align-items-center ">
        <p>&copy; {{date ('d-m-Y') }} &middot; <a href="{{ route ('livros.home') }}">Home</a> &middot; 
        <a href="#">Privacidade / Termos / Juliana Lima</a></p> <br>
            <br><div class="col-md-12 text-center">
            <a href="#"><i class="bi bi-facebook text-info mr-4"></i></a>
            <a href="#"><i class="bi bi-twitter text-info mr-4"></i></a>
            <a href=""><i class="bi bi-linkedin text-info mr-4"></i></a>
            <a href=""><i class="bi bi-whatsapp text-info mr-4"></i></a>
            <a href="#"><i class="bi bi-instagram text-info mr-4"></i></a>
          </div>
        </div>
        <p class="float-right"><a href="#">Clique aqui e volte ao topo </a></p>
      </div>
    </div>
    </footer>
     

   
 
 
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
 <script src="../../assets/js/vendor/popper.min.js"></script>
 <script src="../../dist/js/bootstrap.min.js"></script>
 <script src="../../assets/js/vendor/holder.min.js"></script>
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr
/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
 <script src="js/jqueryCicle.js" type="text/javascript"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity=
"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity=
"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
 <script src="js/marcadagua.js" type="text/javascript"></script>
 <script src="/public/style.js"></script>
 </body>
 </html>
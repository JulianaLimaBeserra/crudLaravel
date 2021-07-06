@extends('livros.master.layout')

@section('content')
<main role="main">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide bg-info" src="https://images.unsplash.com/photo-1512820790803-83ca734da794?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTN8fGJvb2tzfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1>LIVROS</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a class="btn btn-lg btn btn-outline-light" href="#" role="button">Saiba Mais</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide bg-success" src="https://images.unsplash.com/photo-1460881680858-30d872d5b530?ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8bW92aWVzfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
            <div class="container">
              <div class="carousel-caption">
                <h1>Seriados e Filmes</h1>
                <p>Confira nossos lançamentos</p>
                <p><a class="btn btn-lg btn btn-outline-light" href="#" role="button">Clique Aqui</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slidebg-info bg-info" src="https://images.unsplash.com/photo-1611996575749-79a3a250f948?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTh8fGdhbWVzfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
            <div class="container">
              <div class="carousel-caption text-right">
                <h1>GAMES</h1>
                <p>Fique por dentro das novidades em Games!</p>
                <p><a class="btn btn-lg btn btn-outline-light" href="#" role="button">Confira nossa Galeria</a></p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      
      <div class="container marketing">
        <div class="row">
          <div class="col-lg-4">
          <img class="rounded-circle" src="https://images.unsplash.com/photo-1622495505508-03991221aca7?ixid=MnwxMjA3fDF8MHxlZGl0b3JpYWwtZmVlZHwxfHx8ZW58MHx8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Generic placeholder image" width="140" height="140">
            <h2>Últimas Novidades em Games</h2>
            <p>A Livraria da Esquina Games anunciou hoje que abriu um novo estúdio de desenvolvimento de jogos em Montreal, Canadá.</p>
            <p><a class="btn btn-outline-primary" href="#" role="button">Veja os Detalhes &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="https://images.unsplash.com/photo-1552820728-8b83bb6b773f?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTl8fGdhbWVzfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Generic placeholder image" width="140" height="140">
            <h2>Últimas Novidades em Games</h2>
            <p>Um MMO de mundo aberto da Livraria da Esquina Games, o New World estreia em 31 de agosto. Prepare-se com um novo trailer que explora o paradoxo de Aeternum.</p>
            <p><a class="btn btn-outline-primary" href="#" role="button">Veja os Detalhes &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="https://images.unsplash.com/photo-1498736297812-3a08021f206f?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mjl8fGdhbWVzfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Generic placeholder image" width="140" height="140">
            <h2>Últimas Novidades em Games</h2>
            <p>Livraria da Esquina Games and Smilegate RPG today announced the award-winning MMOARPG Lost Ark will be available in North America and Europe on PC in 2021.</p>
            <p><a class="btn btn-outline-primary" href="#" role="button">Veja os Detalhes &raquo;</a></p>
          </div>
        </div>
        <hr class="featurette-divider">
        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading"> Se você gosta de terror, este filme é ideal para você. <span class="text-muted"> It </span></h2>
            <p class="lead"> Um grupo de crianças se une para investigar o misterioso desaparecimento de vários jovens em sua cidade. Eles descobrem que o culpado é Pennywise, um palhaço cruel que se alimenta de seus medos e cuja violência teve origem há vários séculos. </p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="https://images.unsplash.com/photo-1601513445506-2ab0d4fb4229?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjN8fG1vdmllc3xlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Oh yeah, este seriado é espetacular. <span class="text-muted">Umbrella Academy</span></h2>
            <p class="lead">Com a morte do pai, irmãos com poderes extraordinários se reencontram e descobrem surpreendentes segredos de família – além de uma ameaça iminente à humanidade.
              Estrelando:Elliot Page,Tom Hopper,David Castañeda Criação:Steve Blackman</p>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" src="https://images.unsplash.com/photo-1572003450258-e40cf4a7215d?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Njd8fG1vdmllc3xlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Generic placeholder image">
          </div>
        </div>
        <hr class="featurette-divider">
        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">E por último, gênero infantil! <span class="text-muted">Toy Store</span></h2>
            <p class="lead">O aniversário do garoto Andy está chegando e seus brinquedos ficam nervosos, temendo que ele ganhe novos brinquedos que possam substituí-los. Liderados pelo caubói Woody, o brinquedo predileto de Andy, eles recebem Buzz Lightyear, o boneco de um patrulheiro espacial, que logo passa a receber mais atenção do garoto. Com ciúmes, Woody tenta ensiná-lo uma lição, mas Buzz cai pela janela. É o início da aventura do caubói, que precisa resgatar Buzz para limpar sua barra com os outros brinquedos.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="https://images.unsplash.com/photo-1616097970275-1e187b4ce59f?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTI5fHxtb3ZpZXN8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Generic placeholder image">
          </div>
        </div>
        <hr class="featurette-divider">
      </div>

@endsection

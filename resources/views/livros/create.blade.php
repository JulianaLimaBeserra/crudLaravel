@extends('livros.master.layout')

@section('content')
  
</head>
<body>

<div class="jumbotron bg-info">
  <div class="container text-center text-white ">
  <h1 class="display-4" >Confira toda nossa livraria aqui!</h1>
  <hr class="my-4">
  <p class="lead">Compre Aqui!</p>
  <p class="lead">Gratos pela  preferência</p>
  
  </div>
</div>

      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <img class="rounded-circle" src="https://images.unsplash.com/photo-1522742943744-b3cd4e6f98e1?ixid=MnwxMjA3fDB8MHxzZWFyY2h8OTJ8fGJvb2tzfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Generic placeholder image" width="140" height="140">
            <h2>Confira nossa Livraria Completa!</h2>
            <p>A Livraria da Esquina anunciou hoje que abriu um novo estúdio de desenvolvimento de jogos em Montreal, Canadá.</p>
            </div>
            <div class="col-lg-4">
            <img class="rounded-circle" src="https://images.unsplash.com/photo-1533029764620-40021530b1aa?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nzd8fGJvb2tzfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Generic placeholder image" width="140" height="140">
            <h2>Livros em Geral</h2>
            <p>Um MMO de mundo aberto da Livraria da Esquina, o New World estreia em 31 de agosto. Prepare-se com um novo trailer que explora o paradoxo de Aeternum.</p>
          </div>
            <div class="col-lg-4">
            <img class="rounded-circle" src="https://images.unsplash.com/photo-1496104679561-38d3af73f9b0?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NTd8fGJvb2tzfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Generic placeholder image" width="140" height="140">
            <h2>Lançamentos de Livros</h2>
            <p>Livraria da Esquina and Smilegate RPG today announced the award-winning MMOARPG Lost Ark will be available in North America and Europe on PC in 2021.</p>
          </div>
          </div>
          </div>

        <div class="container py-5">
        <form action="{{ route ('salvar_livro')}}" method="post">
    @csrf
      <div class="form-group">
      <div><label for="isbn">ISBN</label><input type="text" class="form-control" name="isbn" id="isbn"></div>
      <div><label for="nome">Nome do Livro</label><input type="text" class="form-control" name="nome" id="nome"></div>
      <div><label for="autor">Autor</label><input type="text" class="form-control" name="autor" id="autor"></div>
      <div><label for="nacionalidade">Nacionalidade</label><input type="text" class="form-control" name="nacionalidade" id="nacionalidade"></div>
      <div><label for="preco">Preço</label><input type="text" class="form-control" name="preco" id="preco"></div>
      <div><label for="genero">Genêro</label><input type="text" class="form-control" name="genero" id="genero"></div> <br>
      <button class="btn btn-primary" type="submit">Submeter</button>
      </div>
    </form>
    </div>

    

    
  
</body>
</html>
@endsection
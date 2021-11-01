<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">
    <title>cadastro</title>
</head>
<body>
    <h1 class="text-center">Cadastro</h1>
    <hr>
    <form action="formCad" id="formCad" method="post"action="{{url('curriculo')}}">
    @csrf
    <input class="form-control" type="text" name="nome" id="nome" placeholder="Nome">
    <input class="form-control" type="text" name="nascimento" id="nascimento" placeholder="Nascimento">
    <input class="form-control" type="text" name="email" id="email" placeholder="Email">
    
     <br>
      <input type="submit" value="Enviar"> 
    </form>

</body>
</html>
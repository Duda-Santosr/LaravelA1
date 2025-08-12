<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula Laravel</title>
</head>
<body>

<h1>Cadastrar Usuários</h1>

<form action="{{route('users.store')}}" method="POST">
    @csrf 

    <label for="name">Nome:</label>
    <input type="text" name="name" id="name" placeholder="Digite o seu nome" value="{{old('name')}}" require> <br> <br>

    <label for="name">Email:</label>
    <input type="email" name="email" id="email" placeholder="Digite o seu email" value="{{old('email')}}" require> <br> <br>
    <label for="name">Senha:</label>
    <input type="password" name="password" id="password" placeholder="Digite o seu password" value="{{old('password')}}" require> <br> <br>

    <button type="submit">Cadastrar</button>
</form>

<a href="{{ route('welcome')}}">Voltar</a>
    
</body>
</html>
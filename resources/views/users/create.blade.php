<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

    <title>Aula Laravel</title>

    <!-- Fonte -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f3f0ff;
        }

        .content-box {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0px 4px 15px rgba(0,0,0,0.1);
        }

        h1 {
            color: #6f42c1;
            font-weight: 700;
        }

        .form-control{
            border-color: #6f42c1;
        }
        .form-control:focus {
            border-color: #6f42c1;
            box-shadow: 0 0 8px rgba(111, 66, 193, 0.4);
        }

        .btn-purple {
            background-color: #6f42c1;
            border: none;
            color: white;
            transition: 0.3s;
        }

        .btn-purple:hover {
            background-color: #d66fedff;
            transform: scale(1.05);
            color: #ffffffff;
        }

        .link-back {
            color: #6f42c1;
            text-decoration: none;
            transition: 0.3s;
        }

        .link-back:hover {
            color: #5a32a3;
            text-decoration: underline;
        }
    </style>

</head>
<body>
<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="content-box col-12 col-md-6 col-lg-4">
        <h1 class="text-center mb-4">Cadastrar Usuários</h1>

        <form action="{{ route('users.store') }}" method="POST">
            @csrf 

            <div class="mb-3">
                <label for="name" class="form-label">Nome:</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Digite o seu nome" value="{{ old('name') }}" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Digite o seu email" value="{{ old('email') }}" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Senha:</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Digite a sua senha" required>
            </div>

            <button type="submit" class="btn btn-purple w-100 mb-3">Cadastrar</button>
        </form>

        <div class="text-center">
            <a href="{{ route('welcome') }}" class="link-back">⬅ Voltar</a>
        </div>
    </div>
</div>
</body>
</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

        <title>Aula de Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;700&display=swap" rel="stylesheet">

        <style>
         body {
            font-family: 'Poppins', sans-serif;
            background-color: #f3f0ff;
            text-align: center;
            padding-top: 100px;
        }

        .content-box {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0px 4px 15px rgba(0,0,0,0.1);
            text-align: center;
        }

        h1 {
            color: #6f42c1; /* Roxo */
            font-weight: 700;
            margin-bottom: 30px;
        }

        .btn-purple {
            background-color: #6f42c1;
            border: none;
            color: white;
            padding: 12px 25px;
            font-size: 18px;
            border-radius: 8px;
            transition: 0.3s;
        }

        .btn-purple:hover {
            background-color: #d66fedff;
            transform: scale(1.05);
            color: #ffffffff;
        }
        </style>
    </head>
<body>
    <h1>Olá, Mundo!</h1>

    <a href="{{ route('users.create')}}" class="btn btn-purple"> Cadastrar </a>
</body>
</html>

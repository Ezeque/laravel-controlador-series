<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Séries</title>

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <!-- Font-Awesome -->
    <script src="https://kit.fontawesome.com/404e8d1dcb.js" crossorigin="anonymous"></script>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body class="bg-dark">
    <div class="container">
        <div class="jumbotron text-white">
            <h1>@yield('cabecalho')</h1>
        </div>
        <main class="mb-5">
            @if(session('msg'))
            <div class="alert alert-success" role="alert">
                {{session('msg')}}
            </div>
            @elseif(session('msg-erro'))
            <div class="alert alert-danger" role="alert">
                {{session('msg-erro')}}
            </div>
            @elseif(session('msg-delete'))
            <div class="alert alert-success" role="alert">
                {{session('msg-delete')}}
            </div>
            @endif
        </main>
        @yield('conteudo')
    </div>

</body>

</html>
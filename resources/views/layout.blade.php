<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Séries</title>
    <!-- CSS only -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="jumbotron">
            <h1>@yield('cabecalho')</h1>
        </div>
        <main class="mb-5">
            @if(session('msg'))
            <div class="bg-success success">
                {{session('msg')}}
            </div>
            @elseif(session('msg-erro'))
            <div class="bg-warning warning">
                {{session('msg-erro')}}
            </div>
            @elseif(session('msg-delete'))
            <div class="bg-warning warning">
                {{session('msg-delete')}}
            </div>
            @endif
        </main>
        @yield('conteudo')
    </div>

</body>

</html>
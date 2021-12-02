<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Séries</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="jumbotron">
            <h1>Lista de séries</h1>
        </div>
        <a href="/series/create" class="btn btn-primary mb-3">Adicionar Série</a>
        <ul class="list-group">
            <?php foreach($series as $series): ?>
            <li class="list-group-item"><?=$series;?></li>
            <?php endforeach; ?>
        </ul>
    </div>
    
</body>

</html>
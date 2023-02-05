<?php
    $anoInicial = '2023';
    $anoAtual = date('Y');
    $copyright = '';
    $aula = 'Aula 6: Tipo Ponto Flutuante (float)';
    define('TITULO', 'PHP Total');

    if ($anoInicial == $anoAtual) {
        $copyright = $anoInicial;
    } else {
        $copyright = "$anoInicial - $anoAtual";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Vovotoqueiro-DEV</title>
</head>
<body class="text-bg-dark">
    <div class="container text-center mt-3">
        <h1 class="display-3"><?php echo TITULO ?></h1>
        <h2><?= $aula ?></h2>
        <hr>
        <p class="lead">Copyright &copy;<?php echo $copyright ?> by J.A. Gaeta Mendes</p>
    </div>
</body>
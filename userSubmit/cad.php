<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
             $nomeUsuario = $_GET["name"] ?: "undefined";
             $sobrenomeUsuario = $_GET["lastName"] ?: "não fornecido";
             echo "<p> É um prazer te conhecer, $nomeUsuario $sobrenomeUsuario! Este é o meu site~~";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>
</html>
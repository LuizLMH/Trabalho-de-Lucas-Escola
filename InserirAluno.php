<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Aluno</title>
</head>
<body>
    <?php
    if(!isset($_POST["nome"])){
        header("Location: cadastrarAl.php");
        exit();
    }
    include 'coneta.php';
    $nome=$_POST["nome"];
    $nomeP=$_POST["pai"];
    $nomeM=$_POST["mae"];
    $cpf=$_POST["cpf"];
    $dataN=$_POST["dataN"];
    $telefone=$_POST["telefone"];
    
    ?>
</body>
</html>
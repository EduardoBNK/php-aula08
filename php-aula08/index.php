<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 08</title>
    
</head>
<body>

    <?php

    echo "<h2>AULA PDO</h2>";
    $conexao = new PDO("mysql:host=localhost;dbname=aulapdo","root","");
    
    var_dump($conexao);

    $select = "SELECT * FROM tb_produtos WHERE id = 2";

    $select = "SELECT * FROM tb_produtos WHERE nome_produto LIKE "%a%";

    $resultado = $conexao->query( $select );

    $consulta = $resultado->fetchAll();
    
    
 
    foreach($consulta as $linha){
    
        echo '<hr> <pre>';
        echo $linha['nome_produto'];
    }
    ?>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
    $array = array(1, 2, 3, 4);
    $array1 = array('fabio' => 30, 'eber' => 40, 'woquiton' => 60);
    $array2 = array(0 => 5, 6 => 8, 9 => 15);

    $array2[6] = 20;
    
    
      

    echo '<br>';
    
    foreach($array1 as $item){
        echo $item . '<br>';
    }

    echo '<br>';

    foreach($array2 as $item){
        echo $item . '<br>';
    }

    $aluno['nome'] = 'Nanda';
    $aluno['idade'] = 18;
    $aluno['endereco'] = 'Rua Lagoa das Pedras';
    $aluno['cidade'] = 'Caculé';
    $aluno['estado'] = 'BA';
    $aluno['cpf'] = '100.080.900-01';

    echo '<br>';

    echo $aluno['nome'] . '<br>';
    echo $aluno['idade'] . '<br>';
    echo $aluno['endereco'] . '<br>';
    echo $aluno['cidade'] . '<br>';
    echo $aluno['estado'] . '<br>';
    echo $aluno['cpf'] . '<br>';

    $professor['nome'] = 'Fabio';
    $professor['idade'] = 100;
    $professor['endereco'] = 'Rua Barão';
    $professor['cidade'] = 'Guanambi';
    $professor['estado'] = 'BA';
    $professor['cpf'] = '100.080.900-01';

    echo '<br>';

    echo $professor['nome'] . '<br>';
    echo $professor['idade'] . '<br>';
    echo $professor['endereco'] . '<br>';
    echo $professor['cidade'] . '<br>';
    echo $professor['estado'] . '<br>';
    echo $professor['cpf'] . '<br>';
?>
    
    
</body>
</html>
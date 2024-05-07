<?php

$alunos=["Duda","Mariana","Nanda","Bruno","Prado","Gabriel","Fabiano","Fatima"];
echo "impressão 1 por 1";

 echo "$alunos[0] <br>";
 echo "$alunos[1] <br>";
 echo "$alunos[2] <br>";
 echo "$alunos[3] <br>";

 echo "exemplo com for <br>";
 for ($i=0; $i<(count($alunos)); $i++){
    echo $i;
    echo "$alunos[$i] <br> ";
    
 }
 echo "exemplo com foreach <br>";
     foreach($alunos as $dados){
        echo $dados; 
     }

     echo "exercicio 4 <br>";
 for ($i=0; $i<(count($alunos)); $i++){
    if ($i==4) {
     echo $alunos[$i];
    }
    
 }
     
     
//exercicio -> imprimir apenas o aluno com a chave 4
?> 


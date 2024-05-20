<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Array-Laços</title>
</head>
<body>
    <h1>array-laços</h1>
    <h2>exemplo 01</h2>
    
    <pre>
    <?php
        $A1=array ("Nanda", "Fernanda", "Barbosa");
        echo $A1[0];
        echo $A1[1];

     
        ?>

    </pre>
    <h2>array com for</h2>
    <pre>
    <?php
    $A2=array("10","9","8","7");
     echo "$A2[0]<br>";
     echo "$A2[1]<br>";
     ?>
    </pre>

    <h2>Impressão com for</h2>
    <pre>
    <?php
        $A3=array("nanda", "maria", "firmo");
        for($i=0; $i<(count($A3)); $i++){
            echo $i;
            echo "$A3[$i] <br> "; 
         }
         ?>
    </pre>

    <h2>Impressão com foreach</h2>
    <pre>
        <?php
    foreach($A3 as $dados){
        echo $dados; 
     }

    ?>
 </pre>
 <h2>Impressão com for</h2>
 <pre>
    <?php
    for($a=0; $a<2; $a++){
        echo$A1[$a];
    }
    ?>
 </pre>

 <h2> Array: Definição Explicita(com chave)</h2>
 <pre>
 <?php
 $a4=array( "Maria" =>25, "João" =>44, "José" =>12, "Neusa" =>73  );

                 foreach($a4 as $dados){
                    echo "$dados<br>"; }
                 ?>
                 </pre>
 <h2> Array: foreach com chave valor</h2>
 <pre>
 <?php
foreach($a4 as $chave => $valor){
    echo "$chave: tem $valor anos <br>";
}

                 
                 ?>
                 </pre>

 <h2> exemplo print </h2>
 <pre>
    <?php
    print_r($a4);
    ?>
 </pre>

 <h2 id="h22">Array Multidimensional: Definição explicita </h2>
 <pre id="pre22">
    <?php
    $alunos= array("Maria"=>
                          array("endereco"=> "Rua Chile 1046",
                                "bairro"  => "Rebouças",
                                "cidade"  => "Guanambi"   ),
                 "João"=>
                           array("endereco"=> "Rua Iapó 234",
                                      "bairro"  => "Prado Velho",
                                      "cidade"  => "Licinio"   ), 
                 "zeca"=>
                           array("endereco"=> "Rua Pesqueiro 1046",
                                     "bairro"  => "São Cristovão",
                                     "cidade"  => "Caculé"  )
                                 

    
);
print_r($alunos);
print_r($alunos ["Maria"] ["endereco"]);
print_r($alunos ["Maria"] ["bairro"]);
print_r($alunos ["João"]  ["cidade"]);
print_r($alunos ["João"]  ["bairro"]);
print_r($alunos ["zeca"]  ["bairro"]);

foreach($alunos as $key => $dados ){
   foreach ($dados as $key2 => $item){
    echo $key . ": " . $key2 . ": " . $item . "<br>";
   } 

}
    ?>
 </pre>
 

</body>
</html>
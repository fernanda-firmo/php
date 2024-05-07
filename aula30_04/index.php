

<?php
$aluno = array( "Fabio S",  30, "rua x", "Guanambi","BA",  "000.000.000-20");

echo "<p> Aluno 1:" . "<br></p>";
for($i=0; $i < 6; $i++){
    echo "$aluno[$i]" . "<br>";

}
echo "<br>"; 
$aluno1 = array( "Nanda", 17, "rua z",  "Caculé", "BA", "000.090.000-10");

echo "<p> Aluno 2:" . "<br></p>";
for($i=0; $i < 6; $i++){
    echo "$aluno1[$i]" . "<br>";

}
echo "<br>";

$aluno2 = array("Prado", 18, "rua b", "Tanque Novo", "BA", "000.000.900-22");

echo "<p> Aluno 3:" . "<br> </p>";
for($i=0; $i < 6; $i++){
    echo "$aluno2[$i]" . "<br>";

}

?>

<style>
p {
    background-color: #bb70ba;
}
</style>


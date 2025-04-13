<?php
//a
$v1 = array("Ferrari", "McLaren", "Red Bull", "BMW", "BAR");
foreach ($v1 as $Chave => $Valor){
    echo "Chave: $Chave - Valor: $Valor <br>";
}

//b
$v2 = array('a'=>8, 'b'=>9, 'd'=>6, 'c'=>2, 'e'=>5);
foreach ($v2 as $Chave => $Valor){
    echo ("Chave: $Chave - Valor: $Valor <br>");
}

//c
$v3 = array("rg" => "00.000.00--X", "cpf" => "000.000.000--00", "cartao de credito" => 12345);
foreach ($v3 as $chave => $valor) {
    echo "Chave: $chave - Valor: $valor<br>";
}

$v4 = array("aluno1" => "alberto", "aluno3" => "bianca", "aluno5" => "carlos", "aluno24" => "maria");
foreach ($v4 as $Chave => $Valor) {
    echo ("Chave: $Chave - Valor: $Valor<br>");
}
?>
<?php

//digitando os números
$n1 =  $_POST["numero1"];
$n2 =  $_POST["numero2"];

//fazendo as operações
$soma = $n1 + $n2;

$sub = $n1 - $n2;

$mult = $n1 * $n2;

$divisao = $n1 / $n2;

// exibindo os resultados das operações 
echo "O resultado da soma é: $soma";
echo "<br>O resultado da subtracao é: $sub";
echo "<br>O resultado da divisão é: $divisao " ;
echo "<br>O resultado da multiplicacao é: $mult";

?>



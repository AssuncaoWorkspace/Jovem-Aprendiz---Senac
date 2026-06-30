<?php

include "conexao.php";

$numero1 = 67;
$numero2 = 22;

$resultado = $numero1 + $numero2;

$sql = "INSERT INTO calculo(numero1, numero2, resultado)
VALUES($numero1, $numero2, $resultado)";

if ($conexao->query($sql)) {
    echo "Dados concectados com sucesso";
}else{
    echo "<br> Erro ao salvar";
    
    }   

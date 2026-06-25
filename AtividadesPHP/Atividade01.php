<?php

$reprovados = 0;
$aprovados = 0;
$candidatos = [

    (object)["nome" => "Gabriel", "nota" => 90],
    (object)["nome" => "Guilherme", "nota" => 67],
    (object)["nome" => "Fábio", "nota" => 42],
    (object)["nome" => "Arlinson", "nota" => 67]

];

foreach ($candidatos as $candidatos) {

    if ($candidatos->nota >= 70) {

        $aprovados++;
    }else {
        $reprovados++;
    }
}
echo "O total de aprovados é: $aprovados <br>";
echo "O total de reprovados é: $reprovados";

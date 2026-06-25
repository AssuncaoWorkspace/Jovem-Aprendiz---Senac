<?php

$aprovados = 0;
$candidatos = [

    (object)["nome" => "Gabriel", "nota" => 90],
    (object)["nome" => "Guilherme", "nota" => 67],
    (object)["nome" => "Fábio", "nota" => 42]

];

foreach ($candidatos as $candidatos) {

    if ($candidatos->nota >= 60) {

        $aprovados++;
    }
}
echo "O total de aprovados é: ", $aprovados;

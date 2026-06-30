<?php

$host = "localhost";
$usuario = "root";
$senha = "senac";
$banco = "conexaophp";
$porta = "3307";

$conexao = new mysqli(
$host,
$usuario,
$senha,
$banco,
$porta

);

if ($conexao->connect_error) {
    die("Erro ao conectar".$conexao->connect_error);
}

echo "Conectado com sucesso ao banco de dados!";
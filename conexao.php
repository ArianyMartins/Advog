<?php

$usuario = 'root';
$senha = 'senac@21';
$database = 'advog';
$host = 'localhost';

@mysqli = new mysqli($host, $usuario, $senha, $database);

if (mysqli->error) {
    die("falha ao conectar com o banco de dados: " . $mysqlui->error);
}
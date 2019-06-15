<?php
session_start();

/////// CONFIGURAÇÃO DA CONEXÃO COM O BANCO DE DADOS! ///////
$usuariodB = 'root';
$senhadB = '';
$nomedB = 'emailAPI';

try {
    $conexao = new PDO('mysql:host=localhost;dbname=' .$nomedB, $usuariodB, $senhadB);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo 'FALHA AO SE CONECTAR AO BANCO DE DADOS!';
}
?>
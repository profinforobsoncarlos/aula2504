<?php
//CONFIGURAÇÕES DE CREDENCIAIS
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "matricula";

//CONEXÃO COM NOSSO BANCO DE DADOS
$conn = new mysqli($servidor, $usuario, $senha, $banco);

//VERIFICANDO A CONEXÃO
if ($conn->connect_error) {
    die("Falha ao se comunicar com o Banco de Dados:".$conn->connect_error);
}
?>
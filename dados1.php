<?php
require_once "config.php";
//DADOS DO FORMULÁRIO
$nome = $_POST["nome"];
$email = $_POST["email"];
$contato = $_POST["phone"];
$sexo = $_POST["sexo"];
$curso = $_POST["curso"];
$data_atual = date("d/m/Y");
$hora_atual = date("H:i:s");

//INSTRUÇÕES PARA INSERIR DADOS NA TABELA
$smtp = $conn->prepare("INSERT INTO alunos (nome, email, phone, sexo, curso, data, hora) VALUES (?,?,?,?,?,?,?)");
$smtp->bind_param("sssssss", $nome, $email, $contato, $sexo, $curso, $data_atual, $hora_atual);

//MENSAGEM CASO OS DADOS SEJAM ENVIADOS COM SUCESSO
if ($smtp->execute()) {
    echo "<h2>Parabéns, $nome, você está matriculado no curso de $curso.</h2>";
}
else {
    echo "<h2>Erro no envio de dados. ". $smtp->error."</h2>";
}

//ENCERRANDO AS CONEXÕES COM O BD
$smtp->close();
$conn->close();
?>
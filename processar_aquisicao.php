<?php
//conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "base_forte";

$conn = new mysqli($servername, $username, $password, $dbname);

//verificar conexão
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

//recuperar e validar dados do formulário
$nome = isset($_POST['nome']) ? trim($_POST['nome']) : null;
$email = isset($_POST['email']) ? filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL) : null;
$telefone = isset($_POST['telefone']) ? trim($_POST['telefone']) : null;
$servico = isset($_POST['servico']) ? trim($_POST['servico']) : null;

//verificar se os campos obrigatórios estão preenchidos
if (!$nome || !$email || !$telefone || !$servico) {
    die("Erro: Todos os campos obrigatórios devem ser preenchidos.");
}

//inserir dados no banco de forma segura
$stmt = $conn->prepare("INSERT INTO aquisicoes (nome, email, telefone, servico) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $nome, $email, $telefone, $servico);

if ($stmt->execute()) {
    echo "<h1>Solicitação realizada com sucesso!</h1>";
    echo "<p>Obrigado, $nome. Sua solicitação para o serviço <strong>$servico</strong> foi registrada.</p>";
    echo "<a href='index.html'>Voltar ao início</a>";
} else {
    echo "Erro ao registrar solicitação: " . $stmt->error;
}

//fechar statement e conexão
$stmt->close();
$conn->close();
?>

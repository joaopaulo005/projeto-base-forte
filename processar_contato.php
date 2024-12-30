<?php
require 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $assunto = $_POST['assunto'];
    $telefone = $_POST['telefone'];
    $mensagem = $_POST['mensagem'];

    try {
        $sql = "INSERT INTO contatos (nome, email, assunto, telefone, mensagem, data_contato) VALUES (:nome, :email, :assunto, :telefone, :mensagem, NOW())";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':assunto', $assunto);
        $stmt->bindParam(':telefone', $telefone);
        $stmt->bindParam(':mensagem', $mensagem);

        $stmt->execute();

        echo "<script>alert('Mensagem enviada com sucesso!'); window.location.href = 'contato.html';</script>";
    } catch (PDOException $e) {
        echo "Erro ao enviar a mensagem: " . $e->getMessage();
    }
} else {
    echo "Método de requisição inválido.";
}
?>

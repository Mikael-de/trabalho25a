<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $duvida = $_POST['duvida'];

    $to = "mikael.k@outlook.com.br";
    $subject = "Novo Contato - Educação Financeira";
    $message = "Nome: $nome\nE-mail: $email\nTelefone: $telefone\n\nDúvida: $duvida";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Erro ao enviar a mensagem. Tente novamente.";
    }
}
?>

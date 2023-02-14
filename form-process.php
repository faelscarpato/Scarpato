<?php
if (isset($_POST['submit'])) {
    $to = "faelscarpato@gmail.com"; // Coloca seu email aqui
    $subject = "Nova mensagem do formulário de contato";
    $headers = "From: ".$_POST['email'];
    $body = "Nome: ".$_POST['name']."\n\nE-mail: ".$_POST['email']."\n\nMensagem: ".$_POST['message'];
    if (mail($to, $subject, $body, $headers)) {
        echo "Mensagem enviada com sucesso";
    } else {
        echo "Erro ao enviar mensagem";
    }
}
?>

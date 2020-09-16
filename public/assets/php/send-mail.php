<?php

require_once (dirname(__DIR__, 3) . '/vendor/autoload.php');

use Source\Support\Email;

$subjectForm = "Solicitação de Contato Site Emplacar's";
$messageForm = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
$nameForm = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
$mailForm = filter_var($_POST['mail'], FILTER_SANITIZE_STRING);
$phoneForm = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);

$email = new Email();

$email->add(
        $subjectForm,
        "<h1>Mensagem de contato site</h1>
        <br>
        <p>Olá " . site('title') . ",</p>
        <p>Me chamo <strong>{$nameForm}</strong>, estou entrando em contato através do formulário do site.</p>
        <br>
        <p>Aqui estão os meus dados para contato:</p>
        <p><strong>E-mail:</strong> <br>{$mailForm}</p>
        <p><strong>Telefone:</strong> <br>{$phoneForm}</p>
        <br>
        <p><strong>Mensagem:</strong><p>
        <p>$messageForm</p>",
        site('title'),
        "tmarsola94@gmail.com"
)->send();

if (!$email->error()) {
   // echo "<script>alert('Mensagem enviada com sucesso! Em breve estaremos entrando em contato!');</script>";
    echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=" . url("info/contato") . "'>";  
} else {
    echo $email->error()->getMessage();
}
        

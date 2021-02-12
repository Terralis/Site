<?php

$nome = addslashes($_POST['nome']);
$email = addslashes($_POST['email']);
$telefone = addslashes($_POST['telefone']);
$assunto = addslashes($_POST['assunto']);
$mensagem = addslashes($_POST['mensagem']);


$to = "paam.vic19@gmail.com";
$subject = "Contato - Site Porto Rico";
$body = "Nome: ".$nome. "\n".
        "Email: ".$email. "\n".
        "Mensagem: ".$mensagem;
$header = "From: paam.vic19@gmail.com"."\n".
          "Reply_to: ".$email."\n".
          "X=Mailer:PHP/".phpversion();

if (mail($to, $subject, $body, $header)) {
    
    echo("Email enviado com sucesso!");
    
    
}
else{

    echo("O email não pode ser enviado.");

}

?>
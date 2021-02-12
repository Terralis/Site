<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$mensagem = $_POST['mensagem'];
		
        require 'vendor/autoload.php';

        $from = new SendGrid\Mail\Mail("paam.vic19@gmail.com");
        $subject = "Mensagem de contato";
        $to = new SendGrid\Mail\Mail("paam.vic19@gmail.com");
        $content = new SendGrid\Mail\Content("text/html", "Olá Pâmela, <br><br>Nova mensagem de contato<br><br>Nome: $nome<br>Email: $email <br>Mensagem: $mensagem");
        $mail = new SendGrid\Mail\From($from, $subject, $to, $content);
        
        //Necessário inserir a chave
        $apiKey = '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';
        $sg = new \SendGrid($apiKey);

        $response = $sg->client->mail()->send()->post($mail);
        echo "Mensagem enviada com sucesso";
		
        ?>
    </body>
</html>

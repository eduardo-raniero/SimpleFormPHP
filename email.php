<?php

if (isset($_POST['email']) && !empty($_POST['email'])){
    
    $nome = addcslashes($_POST['name']);
    $email = addcslashes($_POST['email']);
    $mensagem = addcslashes($_POST['msg']);

    $to = "eduardoraniero@gmail.com";
    $subject = "Resposta-Pesquisa";
    $body = "Nome: ".$nome. "\n".
            "Email: ".$email. "\n".
            "Mensagem: ".$mensagem;
    $header = "From:eduardoraniero2@gmail.com"."\r\n"
              ."Reply-to:".$email."\r\n"
              ."X=Mailer:PHP/".phpversion();

    if(mail($to, $subject, $body, $header)) {
        
        echo("Email enviado com sucesso!");

    }else {
        
        echo("Erro no envio!");

    }
}






?>
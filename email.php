<?php
if(isset($_POST['email']) && !empty($_POST['email'])){
    $nome = addcslashes($_POST['name'])
    $email = addcslashes($_POST['email'])
    $subject = addcslashes($_POST['subject'])
    $message = addcslashes($_POST['message'])

    $to = "jardesonaraujoarlindo@gmail.com";
    $body = "Nome: ".$nome."\r\n".
            "Email: ".$email."\r\n".
            "Assunto: ".$subject."\r\n".
            "Mensagem: ".$message."\r\n";
    $header = "From: jardesonaraujoarlindo@gmail.com"."\r\n".
               "Reply-To: ".$email."\r\n".
               "X=Mailer:PHP/".phpversion();

    if(mail($to,$subject,$body,$header)){
        echo "<script type='javascript'>alert('Email enviado com Sucesso!');";
        echo "javascript:window.location='index.php';</script>";
    }else{
        echo "<script type='javascript'>alert('O email não pode ser enviado!');";
        echo "javascript:window.location='index.php';</script>";
    }
}



?>
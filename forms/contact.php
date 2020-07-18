<!--
<html>
<head>
</head>
<body>
<?php
  $name= $_POST['name'];
  $email= $_POST['email'];
  $subject= $_POST['subject'];
  $message= $_POST['message'];
?>

<?php
  $to = "jardesonaraujoarlindo@hotmail.com";
  $subject = "$subject";
  $message = " <strong> Nome:</strong> $name <br> 
              <strong>E-mail</strong> $email <br> 
              <strong>Assunto:</strong> $subject <br> 
              <strong>Message:</strong> $message";  
  $header = "MIME-Version: 1.0\n";
  $header .= "Content-type: text/html; charset=iso-8859-1\n";
  $header .= "From: $email\n";
  mail($to, $subject, $message, $header);
  echo "Mensagem enviada com sucesso"
?>
</body>
</html>
-->
  $receiving_email_address = 'jardesonaraujoarlindo@hotmail.com';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['name'];
  $contact->from_email = $_POST['email'];
  $contact->subject = $_POST['subject'];

  $contact->add_message( $_POST['name'], 'From');
  $contact->add_message( $_POST['email'], 'Email');
  $contact->add_message( $_POST['message'], 'Message', 10);

  echo $contact->send();
?>

<?php
$nome=$_POST['nome'];
$telefone=$_POST['telefone'];
$email=$_POST['email'];
$assunto=$_POST['assunto'];
$mensagem=$_POST['mensagem'];
$mensagem= 'Esta mensagem foi enviada através do formulário do site <b>Trinita.com.br</b><br><br>';
$mensagem.='<b>Nome: </b>'.$nome.'<br>';
$mensagem.='<b>Telefone:</b> '.$telefone.'<br>';
$mensagem.='<b>E-Mail:</b> '.$email.'<br>';
$mensagem.='<b>Assunto:</b> '.$assunto.'<br>';
$mensagem.='<b>Mensagem:</b><br> '.$mensagem;
require("phpmailer/src/PHPMailer.php");
require("phpmailer/src/SMTP.php");
require ("phpmailer/src/Exception.php");

$mail = new PHPMailer\PHPMailer\PHPMailer();
$mail->isSMTP();
$mail->Host       = 'www.locaweb.com.br';
$mail->SMTPAuth   = true;
$mail->Username   = 'renata@trinita.com.br';
$mail->Password   = '0123456';
$mail->SMTPSecure = 'ssl';
$mail->Port       = 587;
$mail->CharSet = 'UTF-8';

//Recipients
$mail->setFrom('daniel@trinita.com.br', 'trinita.com.br');
$mail->addAddress('contato@trinita.com.br');
// $mail->addAddress('renata@trinita.com.br');
$mail->addReplyTo($email, $nome);  

// Attachments
// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

// Content
$mail->isHTML(true);                                  // Set email format to HTML
$mail->assunto = 'Mensagem do Formulário'; //ASSUNTO
$mail->Body    = $mensagem;  //CORPO DA MENSAGEM
$mail->AltBody = $mensagem;  //CORPO DA MENSAGEM EM FORMA ALT

// $mail->send();
if(!$mail->Send()) {
    echo "<script>alert('Erro ao enviar o E-Mail');window.location.assign('index.php');</script>";
}else{
    echo "<script>alert('E-Mail enviado com sucesso!');window.location.assign('index.php');</script>";
}
die
?>
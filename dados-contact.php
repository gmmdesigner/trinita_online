<?php

if (isset($_POST['acao'])){

    $nome=$_POST['nome'];
    $telefone=$_POST["telefone"];
    $email=$_POST["email"];
    $assunto=$_POST["assunto"];
    $mensagem=$_POST["mensagem"];

    echo "<p>Olá, ".$nome."</p>";
    echo "<p>Seu telefone é: ".$telefone."</p>";
    echo "<p>Seu e-mail é: ".$email."</p>";
    echo "<p>Seu mensagem é: ".$mensagem."</p>";

}

?>
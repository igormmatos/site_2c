<?php
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $projeto = $_POST['projeto'];

    $corpo  = "Nome: ".$nome."\n";
    $corpo .= "Email: ".$email."\n";
    $corpo .= "Mensagem: ".$projeto."\n";

    if(mail("root2csistemas@gmail.com","Assunto",$corpo)){
      echo "<script>alert('E-mail enviado com sucesso.');</script>";
	  echo "<script> location.href = 'http://www.2csistemas.com.br'; </script>";
    } else {
      echo "<script>alert('Erro ao enviar e-mail.');</script>";
    }

 ?>

<?php

   $nome = addslashes($_POST['nome']);
   $email =addcslashes($_POST['email']);
   $telefone =addcslashes($_POST['telefone']);

   $para = "jescklaysoft@hotmail.com";
   $contato "Coleta de dados - Inteliogia";

   $corpo = "nome: ".$nome."\n"."E-email: ".$email."\n"."telefone: ".$telefone; /*(\n) contrabarra n. Serve para quebrar linha*/ 

   $cabeca = "from: jescklaysoft@hotmail.com"."\n"."Reply-to: ".$email."\n"."=x-Mailer:PHP/".phpversion();
   
   if(mail($para,$assunto,$cabeca)){
    echo("E-mail enviado com sucesso");
   }else{
    echo("Houve um erro ao enviar o email");
   }



?>
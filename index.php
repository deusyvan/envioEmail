<?php
if (isset($_POST['nome']) && !empty($_POST['nome'])){
    
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $msg = addslashes($_POST['msg']);
    
    $para = "deusyvan@gmail.com";
    $assunto = "Pergunta do Contato";
    $corpo = "Nome: ".$nome." - E-mail: ".$email." - Mensagem: ".$msg;
    
    $cabecalho = "From: contato@dfsweb.com.br"."\r\n".
                 "Replay-To: ".$email."\r\n".
                 "X-Mailer: PHP/".phpversion();
    
    
    
    
}

?>

<form method="POST">

	NOME:<br/>
	<input type="text"  name="nome"/><br/><br/>
	
	E-MAIL:<br/>
	<input type="email"  name="email"/><br/><br/>
	
	MENSAGEM:<br/>
	<textarea name="msg"></textarea><br/><br/>
	
	<input type="submit"  value="Enviar"/>

</form>
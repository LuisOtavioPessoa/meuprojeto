<!DOCTYPE html>
<html>
<head>
<style>

</style>
</head>

<body>
<div style="background-color:red">
<?php

$nome = $_REQUEST['nome'];
$email = $_REQUEST['email'];
$assunto = $_REQUEST['assunto'];

echo "Olá <strong>$nome</strong>.<br>Recebemos seu email sobre a sua $assunto.<br>Nossa equipe irá passar o nosso feedback pelo seu e-mail $email.";




?>
</div>
</body>
</html>

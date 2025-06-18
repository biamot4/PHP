<?php
//ACESSA A PÁGINA E VERIFICA SE O MÉTODO DE REQUISIÇÃO É POST
if($_SERVER ["REQUEST_METHOD"] === "POST"){
    //ISSET = FUNÇÃO QUE VERIFICA SE A VARIÁVEL NÃO ESTÁ VAZIA
    if (isset($_POST["userEmail"])) {
        $email = $_POST ["userEmail"];

        echo $email;
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>

    <form method="POST">
    <label for="useremail">
    <P>Endereço de email</P>
    </label>
    <input type="email" id = "userEmail" name = "userEmail" placeholder = "Email@gmail.com">
    <button type = "submit" > Entrar </button>
    </form>
</body>
</html>



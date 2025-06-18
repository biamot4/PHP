<?php

if ($_SERVER["REQUEST_METHOD"] === "POST"){
    if(isset($_POST["nome_produto"])){
        $nome = $_POST["nome_produto"];
        echo $nome . "<br>";
    }

    if(isset($_POST["produto"])){
        $produto = $_POST ["produto"];
        echo $produto . "<br>"; 
    }

    if(isset($_POST ["estrela1"])){
        $estrela1 = $_POST ["estrela1"];
        echo $estrela1 . "<br>";
    }

    if(isset($_POST ["estrela2"])){
        $estrela2 = $_POST ["estrela2"];
        echo $estrela2 . "<br>";
    }

    if(isset($_POST ["estrela3"])){
        $estrela3 = $_POST ["estrela3"];
        echo $estrela3 . "<br>";
    }

    if(isset($_POST ["estrela4"])){
        $estrela4 = $_POST ["estrela4"];
        echo $estrela4 . "<br>";
    }

    if(isset($_POST ["estrela5"])){
        $estrela5 = $_POST ["estrela5"];
        echo $estrela5 . "<br>";
    }

    if(isset($_POST["comentario"])){
        $comentario = $_POST ["comentario"];
        echo $comentario . "<br>";
    }
}


?>





<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
</head>
<body>
    
<form method="POST">
    <label for="Nome">
        <p>Nome do produto</p>
    </label>
    <input type="text" id = "nome_produto" name = "nome_produto" placeholder = "Digite o nome do produto">

    <label for="Nome">
        <p>Produto</p>
    </label>
    <select name="produto" id="produto">
        <option value="Livro"> Livro </option>
        <option value="lapis"> Lápis</option>
        <option value="borracha"> Borracha</option>
    </select>


    <label for="Avaliação">
        <p>Avaliação do produto</p>
    </label>
    <p>1 Estrela</p>
    <input type="radio" id = "estrela1" name = "estrela1" value = " 1 Estrela"/>
    <p>2 Estrelas</p>
    <input type="radio" id = "estrela2" name = "estrela2" value = "2 Estrelas"/>
    <p>3 Estrelas</p>
    <input type="radio" id = "estrela3" name = "estrela3" value = "3 Estrelas"/>
    <p>4 Estrelas</p>
    <input type="radio" id = "estrela4" name = "estrela4" value = "4 Estrelas"/>
    <p>5 Estrelas</p>
    <input type="radio" id = "estrela5" name = "estrela5" value = "5 Estrelas"/>


    <label for="Comentário">
        <p>Comentário</p>
    </label>
    <input type="text" id = "comentario" name = "comentario" placeholder = "Digite aqui o seu comentário!">

    <button type = "submit"> Envie o seu formulário</button>
</form>
</body>
</html>
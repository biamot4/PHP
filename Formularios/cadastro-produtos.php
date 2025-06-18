<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["nome_produto"])) {
        $nome = $_POST ["nome_produto"];
        echo $nome . "<br>";
    }

  
    if (isset($_POST["categoria_do_produto"])) {
        $categoria = $_POST ["categoria_do_produto"];
        echo $categoria . "<br>";
    }

    if(isset($_POST["preco_produto"])){
        $preco = $_POST ["preco_produto"];
        echo $preco . "<br>" ; 
    }

    if(isset($_POST["qtd_produto"])){
        $qtd = $_POST ["qtd_produto"];
        echo $qtd . "<br>";
    }

}
?>





<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos </title>
</head>
<body> 
    <form method ="POST">
        <label for="Nome">
            <p> Nome do produto </p>
        </label>
        <input type="text" id = "nome_produto" name = "nome_produto" placeholder = " Digite aqui o nome do produto">

        <label for="Categoria do Produto">
            <p> Categoria do Produto </p>
        </label>
        <input type="text" id = "categoria_do_produto" name = "categoria_do_produto" placeholder = "Digite a categoria do produto">

        <label for="Preço">
            <p> Preço do produto</p>
        </label>
        <input type="number" id = "preco_produto" name = "preco_produto" placeholder = " Digite o Preço do produto">

        <label for="Quantidade ">
            <p> Quantidade em estoque</p>
        </label>
        <input type="number" id = "qtd_produto" name = "qtd_produto" placeholder = " Digite a quantidade do produto">
        <button type = "submit" > Cadastrar o produto </button>

    </form>

    
</body>
</html>
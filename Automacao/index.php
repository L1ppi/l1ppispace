<?php
require_once("./conexao.php")
?>

<!-- Sistema para automatiza preenchimento -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Automacao\css\estilos-automação.css">
    <link rel="shortcut icon" type="image/x-icon" href=" ../Automacao\img\Logo.png ">
    <title>Automação</title>
</head>
    <body>
        <!-- 1° Criar a div principal-->
        <div class="usuario">

            <div class="form" >
                <!-- Adicionar imagem de login -->
                <img class="imagem1" src="../Automacao\img\Imagem-login.png" alt="Imagem login">
                <div class="dentrodoform">
                <form method="POST" action="salvar.php">
                    <!-- Criar input para Nome do usuario -->
                    <input type="text" name="user" placeholder="Nome completo" required>
                    <!-- Criar input para telefone de usuario -->
                    <input type="text" name="telefone" placeholder="(00)00000-0000" required>
                    <!-- Criar input para senha do usuario -->
                    <input type="password" name="senha" placeholder="Senha" required>
                    <button>Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>

<!-- Conexão com o banco de dados -->
<?php
    // Informar os dados do servidos DB, Criar variável($) de memória para conter as informações de acesso ao DB
    $servidor = 'localhost';
    $banco = 'l1ppispace';
    $usuario = 'root';
    $senha = '';
    //Executar procedimento de tentativa e erro
    try { //... tentar conectar ao DB:
        //Criar variavel do tipo PDO
        $pdo = new PDO("mysql:dbname=$banco; hostname=$servidor; charset=utf8","$usuario","$senha");
    } catch (Exception $e) {//... se der errado:
        //Criamos a variável do tipo Exception (e) para receber os erros de conexão retornados pelo DB
        echo "<div class='overlay'></div>";
        echo "<div class='echo'><p>Erro ao conectar no banco de dados<br>Entre em contato com o Alessandro com os Alunos não<br></p></div>";
        //echo $e;

    }
?>
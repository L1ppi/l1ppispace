<!-- Recebe o conteudo dos inputs e armazena em variáveis locais para serem salvas(insert) no DB  -->
<?php
    //Realizar conexão com o DB
    require_once("./conexao.php");
    //receber as variáveis dos INPUTs (arquivo index.php)
    //armazenar em variáveis locais (criadas no arquivo salvar.php)

    //Criar uma sessão para variáveis globais
    @session_start();
    //Criar variáveis locais para armazenar o conteúdo as variáveis globais (variáveis dos INPUTS)
    $user = $_POST['usuario'];//Armazena na variável local o conteúdo do input usuário
    $fone = $_POST['telefone'];
    $passwd = $_POST['senha'];
    //Tentar enviar (insert) as informações para o DB
    try {
        $query = "INSERT INTO usuarios (nomeUsuari,telefoneUsuario,senhaUsuario)
        VALUES (:user, :fone ,:passwd)";
        //Preparando query como pdo
        $stmt = $pdo->prepare($query);
        $stmt-> bindParam(':user',$user);
        $stmt-> bindParam(':fone',$fone);
        $stmt-> bindParam(':passwd',$passwd);
        //executa a query
        $stmt-> execute();
        echo'Usuario cadastrado com sucesso';
    } catch (Exception $e) {
        echo'Erro ao cadastrar os dados no banco de dados <br>';
        echo $e;
        //timer aqui
        sleep(5);
        header("Location: index.php");
        
        
    }


?>
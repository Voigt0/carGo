<!DOCTYPE html>
<?php
    $comando = "";
    if(isset($_POST['comando'])){$comando = $_POST['comando'];}else if(isset($_GET['comando'])){$comando = $_GET['comando'];}
    $tabela = "";
    if(isset($_POST['tabela'])){$tabela = $_POST['tabela'];}else if(isset($_GET['tabela'])){$tabela = $_GET['tabela'];}
    $title = "";
?>
<html>
<head>
    <meta charset="UTF-8">
    <title> <?php echo $title; ?> </title>
    <style>
       body {
            right: 200px;
       } 
    </style>
</head>
<body class="">
    <?php
    include_once "../conf/default.inc.php";
    require_once "../conf/Conexao.php";
    acao($comando, $tabela);


    
    

    function acao($acao, $tabela){
        if($acao == "insert"){inserir($tabela);}
        else if($acao == "deletar"){deletar($tabela);}
        else if($acao == "update"){atualizar($tabela);}
    }






    function inserir($tabela){
    $pdo = Conexao::getInstance();
    if($tabela == 'cliente'){
        $dados = dados();
        $nome = $dados["CLI_NOME"];
        $sobrenome = $dados["CLI_SOBRENOME"];
        $nascimento = $dados["CLI_NASCIMENTO"];
        $telefone = $dados["CLI_TELEFONE"];
        $email = $dados["CLI_EMAIL"];
        $telefoneres = $dados["CLI_TELEFONERES"];
        $cnh = $dados["CLI_CNH"];
        $cnhvalidade = $dados["CLI_CNHVALIDADE"];
        $cnhtipo = $dados["CLI_CNHTIPO"];
        $cpf = $dados["CLI_CPF"];
        $senha = $dados["CLI_SENHA"];
        $stmt = $pdo->prepare("INSERT INTO `cargo`.`cliente` (`CLI_NOME`, `CLI_SOBRENOME`, `CLI_NASCIMENTO`, `CLI_TELEFONE`, `CLI_EMAIL`, `CLI_TELEFONERES`, `CLI_CNH`, `CLI_CNHVALIDADE`, `CLI_CNHTIPO`, `CLI_CPF`, `CLI_SENHA`) VALUES ('$nome', '$sobrenome', '$nascimento', '$telefone', '$email', '$telefoneres', '$cnh', '$cnhvalidade', '$cnhtipo', '$cpf', '$senha');");
        $stmt->execute();
        header('location:tabelacliente.php');
    } else if($tabela == 'locacao'){
        $dados = dados();
        $loclocal = $dados['LOC_LOCAL'];
        $locentrada = $dados["LOC_ENTRADA"];
        $locsaida = $dados["LOC_SAIDA"];
        $stmt = $pdo->prepare("INSERT INTO `cargo`.`locacao` (`LOC_LOCAL`, `LOC_ENTRADA`, `LOC_SAIDA`) VALUES ('$loclocal', '$locentrada', '$locsaida')");
        $stmt->execute();
        header('location:tabelalocacao.php');
    } else if($tabela == 'loja'){
        $dados = dados();
        $nome = $dados["LOJ_NOME"];
        $estado = $dados["LOJ_ESTADO"];
        $cidade = $dados["LOJ_CIDADE"];
        $rua = $dados["LOJ_RUA"];
        $numero = $dados["LOJ_NUMERO"];
        $telefone = $dados["LOJ_TELEFONE"];
        $stmt = $pdo->prepare("INSERT INTO `cargo`.`loja` (`LOJ_NOME`, `LOJ_ESTADO`, `LOJ_CIDADE`, `LOJ_RUA`, `LOJ_NUMERO`, `LOJ_TELEFONE`) VALUES ('$nome', '$estado', '$cidade', '$rua','$numero','$telefone')");
        $stmt->execute();
        header('location:tabelaloja.php');
    }
    }











    function deletar($tabela){
    $id = $_GET['id'];
    $pdo = Conexao::getInstance();
    if($tabela == 'loja'){
        $stmt = $pdo->query("DELETE FROM `cargo`.`loja` WHERE LOJ_ID = $id");
        $stmt->execute();
        header('location:tabelaloja.php');
    } else if($tabela == 'cliente'){
        $stmt = $pdo->query("DELETE FROM `cargo`.`cliente` WHERE CLI_ID = $id");
        $stmt->execute();
        header('location:tabelacliente.php');
    } else if($tabela == 'locacao'){
        $stmt = $pdo->query("DELETE FROM `cargo`.`locacao` WHERE LOC_ID = $id");
        $stmt->execute();
        header('location:tabelalocacao.php');
    }
    }






    function atualizar($tabela){
    if(isset($_POST['id'])){$id = $_POST['id'];}
        $pdo = Conexao::getInstance();
    if($tabela == 'locacao'){
        $dados = dados();
        $loclocal = $dados['LOC_LOCAL'];
        $locentrada = $dados["LOC_ENTRADA"];
        $locsaida = $dados["LOC_SAIDA"];
        $stmt = $pdo->query("UPDATE `cargo`.`locacao` SET `LOC_LOCAL` = '$loclocal', `LOC_ENTRADA` = '$locentrada', `LOC_SAIDA` = '$locsaida' WHERE (`LOC_ID` = '$id');");
        $stmt->execute();
        header('location:tabelalocacao.php');
    } else if($tabela == 'loja'){
        $dados = dados();
        $nome = $dados["LOJ_NOME"];
        $estado = $dados["LOJ_ESTADO"];
        $cidade = $dados["LOJ_CIDADE"];
        $rua = $dados["LOJ_RUA"];
        $numero = $dados["LOJ_NUMERO"];
        $telefone = $dados["LOJ_TELEFONE"];
        $stmt = $pdo->prepare("UPDATE `cargo`.`loja` SET `LOJ_NOME` = '$nome', `LOJ_ESTADO` = '$estado', `LOJ_CIDADE` = '$cidade', `LOJ_RUA` = '$rua', `LOJ_NUMERO` = '$numero', `LOJ_TELEFONE` = '$telefone' WHERE (`LOJ_ID` = '$id');");
        $stmt->execute();
        header('location:tabelaloja.php');
    } else if($tabela == 'cliente'){
        $dados = dados();
        $nome = $dados["CLI_NOME"];
        $sobrenome = $dados["CLI_SOBRENOME"];
        $nascimento = $dados["CLI_NASCIMENTO"];
        $telefone = $dados["CLI_TELEFONE"];
        $email = $dados["CLI_EMAIL"];
        $telefoneres = $dados["CLI_TELEFONERES"];
        $cnh = $dados["CLI_CNH"];
        $cnhvalidade = $dados["CLI_CNHVALIDADE"];
        $cnhtipo = $dados["CLI_CNHTIPO"];
        $cpf = $dados["CLI_CPF"];
        $senha = $dados["CLI_SENHA"];
        $stmt = $pdo->prepare("UPDATE `cargo`.`cliente` SET `CLI_NOME` = '$nome', `CLI_SOBRENOME` = '$sobrenome', `CLI_NASCIMENTO` = '$nascimento', `CLI_TELEFONE` = '$telefone', `CLI_EMAIL` = '$email', `CLI_TELEFONERES` = '$telefoneres', `CLI_CNH` = '$cnh', `CLI_CNHVALIDADE` = '$cnhvalidade', `CLI_CNHTIPO` = '$cnhtipo', `CLI_CPF` = '$cpf', `CLI_SENHA` = '$senha' WHERE (`CLI_ID` = '$id');");
        $stmt->execute();
        header('location:tabelacliente.php');
    }
    }











    function dados(){
        $dados = array();
        $dados['CLI_NOME'] = $_POST["CLI_NOME"];
        $dados['CLI_SOBRENOME'] = $_POST["CLI_SOBRENOME"];
        $dados['CLI_NASCIMENTO'] = $_POST["CLI_NASCIMENTO"];
        $dados['CLI_TELEFONE'] = $_POST["CLI_TELEFONE"];
        $dados['CLI_EMAIL'] = $_POST["CLI_EMAIL"];
        $dados['CLI_TELEFONERES'] = $_POST["CLI_TELEFONERES"];
        $dados['CLI_CNH'] = $_POST["CLI_CNH"];
        $dados['CLI_CNHVALIDADE'] = $_POST["CLI_CNHVALIDADE"];
        $dados['CLI_CNHTIPO'] = $_POST["CLI_CNHTIPO"];
        $dados['CLI_CPF'] = $_POST["CLI_CPF"];
        $dados['CLI_SENHA'] = $_POST["CLI_SENHA"];
        $dados['LOC_LOCAL'] = $_POST['LOC_LOCAL'];
        $dados['LOC_ENTRADA'] = $_POST['LOC_ENTRADA'];
        $dados['LOC_SAIDA'] = $_POST['LOC_SAIDA'];
        $dados['LOJ_NOME'] = $_POST["LOJ_NOME"];
        $dados['LOJ_ESTADO'] = $_POST["LOJ_ESTADO"];
        $dados['LOJ_CIDADE'] = $_POST["LOJ_CIDADE"];
        $dados['LOJ_RUA'] = $_POST["LOJ_RUA"];
        $dados['LOJ_NUMERO'] = $_POST["LOJ_NUMERO"];
        $dados['LOJ_TELEFONE'] = $_POST["LOJ_TELEFONE"];
        return $dados;
    }









    function buscarDados($id,$tabela){
        $pdo = Conexao::getInstance();
        $dados = array();
    if($tabela == 'locacao'){
        $consulta = $pdo->query("SELECT * FROM locacao WHERE LOC_ID = $id");
        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
            $dados['LOC_LOCAL'] = $linha['LOC_LOCAL'];
            $dados['LOC_ENTRADA'] = $linha['LOC_ENTRADA'];
            $dados['LOC_SAIDA'] = $linha['LOC_SAIDA'];
        }
    } else if($tabela == 'cliente'){
        $consulta = $pdo->query("SELECT * FROM cliente WHERE CLI_ID = $id");
        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
            $dados['CLI_NOME'] = $linha["CLI_NOME"];
            $dados['CLI_SOBRENOME'] = $linha["CLI_SOBRENOME"];
            $dados['CLI_NASCIMENTO'] = $linha["CLI_NASCIMENTO"];
            $dados['CLI_TELEFONE'] = $linha["CLI_TELEFONE"];
            $dados['CLI_EMAIL'] = $linha["CLI_EMAIL"];
            $dados['CLI_TELEFONERES'] = $linha["CLI_TELEFONERES"];
            $dados['CLI_CNH'] = $linha["CLI_CNH"];
            $dados['CLI_CNHVALIDADE'] = $linha["CLI_CNHVALIDADE"];
            $dados['CLI_CNHTIPO'] = $linha["CLI_CNHTIPO"];
            $dados['CLI_CPF'] = $linha["CLI_CPF"];
            $dados['CLI_SENHA'] = $linha["CLI_SENHA"];
        }
    } else if($tabela == 'loja'){
        $consulta = $pdo->query("SELECT * FROM loja WHERE LOJ_ID = $id");
        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
            $dados['LOJ_NOME'] = $linha["LOJ_NOME"];
            $dados['LOJ_ESTADO'] = $linha["LOJ_ESTADO"];
            $dados['LOJ_CIDADE'] = $linha["LOJ_CIDADE"];
            $dados['LOJ_RUA'] = $linha["LOJ_RUA"];
            $dados['LOJ_NUMERO'] = $linha["LOJ_NUMERO"];
            $dados['LOJ_TELEFONE'] = $linha["LOJ_TELEFONE"];
        }
    }
        return $dados;
    }














    if($comando == "verificar"){
        $pdo = Conexao::getInstance();
        $cpf = $_POST["CLI_CPF"];
        $senha = $_POST["CLI_SENHA"];     
        $stmt = $pdo->query("SELECT * FROM cargo.cliente;");
        $confirmado = 0;
            while ($linha = $stmt->fetch(PDO::FETCH_ASSOC)) {
                if ($cpf == $linha['CLI_CPF'] && $senha == $linha['CLI_SENHA']){
                    $confirmado = 1;
                    $usuario = $linha['CLI_NOME'];
                }
            }
            if($confirmado == 0){
                header('location:login.php');
            } else {
                header('location:logou.php');
            }
    }
    ?>
</body>
</html>
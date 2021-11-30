<!DOCTYPE html>
<?php   
    $comando = $_POST['comando'];
    $tabela = $_POST['tabela'];
    $title = "";
    $delete = isset($_GET['delete']) ? $_GET['delete'] : "";
    $id = $_GET['id'];
    $table = $_GET['table'];

?>
<html>
<head>
    <meta charset="UTF-8">
    <title> <?php echo $title; ?> </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
    $pdo = Conexao::getInstance();
    if($comando == "insert" && $tabela == 'cliente'){
        $nome = $_POST["CLI_NOME"];
        $sobrenome = $_POST["CLI_SOBRENOME"];
        $nascimento = $_POST["CLI_NASCIMENTO"];
        $telefone = $_POST["CLI_TELEFONE"];
        $email = $_POST["CLI_EMAIL"];
        $telefoneres = $_POST["CLI_TELEFONERES"];
        $cnh = $_POST["CLI_CNH"];
        $cnhvalidade = $_POST["CLI_CNHVALIDADE"];
        $cnhtipo = $_POST["CLI_CNHTIPO"];
        $cpf = $_POST["CLI_CPF"];
        $senha = $_POST["CLI_SENHA"];
        $consulta = $pdo->prepare("INSERT INTO `cargo`.`cliente` (`CLI_NOME`, `CLI_SOBRENOME`, `CLI_NASCIMENTO`, `CLI_TELEFONE`, `CLI_EMAIL`, `CLI_TELEFONERES`, `CLI_CNH`, `CLI_CNHVALIDADE`, `CLI_CNHTIPO`, `CLI_CPF`, `CLI_SENHA`) VALUES ('$nome', '$sobrenome', '$nascimento', '$telefone', '$email', '$telefoneres', '$cnh', '$cnhvalidade', '$cnhtipo', '$cpf', '$senha');");
        $consulta->execute();
        header('location:tabelacliente.php');
    } else if($comando == "insert" && $tabela == 'locacao'){
        $locentrada = $_POST["LOC_ENTRADA"];
        $locsaida = $_POST["LOC_SAIDA"];
        $consulta = $pdo->prepare("INSERT INTO `cargo`.`locacao` (`LOC_ENTRADA`, `LOC_SAIDA`, LOC_VALOR) VALUES ('$locentrada', '$locsaida', '')");
        $consulta->execute();
        header('location:tabelalocacao.php');
    } else if($comando == "insert" && $tabela == 'loja'){
        $nome = $_POST["LOJ_NOME"];
        $estado = $_POST["LOJ_ESTADO"];
        $cidade = $_POST["LOJ_CIDADE"];
        $rua = $_POST["LOJ_RUA"];
        $numero = $_POST["LOJ_NUMERO"];
        $telefone = $_POST["LOJ_TELEFONE"];
        $consulta = $pdo->prepare("INSERT INTO `cargo`.`loja` (`LOJ_NOME`, `LOJ_ESTADO`, `LOJ_CIDADE`, `LOJ_RUA`, `LOJ_NUMERO`, `LOJ_TELEFONE`) VALUES ('$nome', '$estado', '$cidade', '$rua','$numero','$telefone')");
        $consulta->execute();
        header('location:tabelaloja.php');
    }

    if($delete == true && $table == 'loja'){
        $consulta = $pdo->query("DELETE FROM `cargo`.`loja` WHERE LOJ_ID = $id");
        $consulta->execute();
        header('location:tabelaloja.php');
    } else if($delete == true && $table == 'cliente'){
        $consulta = $pdo->query("DELETE FROM `cargo`.`cliente` WHERE CLI_ID = $id");
        $consulta->execute();
        header('location:tabelacliente.php');
    } else if($delete == true && $table == 'locacao'){
        $consulta = $pdo->query("DELETE FROM `cargo`.`locacao` WHERE LOC_ID = $id");
        $consulta->execute();
        header('location:tabelalocacao.php');
    }

    if($comando == "verificar"){
        $cpf = $_POST["CLI_CPF"];
        $senha = $_POST["CLI_SENHA"];     
        $consulta = $pdo->query("SELECT * FROM cargo.cliente;");
        $confirmado = 0;
            while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
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
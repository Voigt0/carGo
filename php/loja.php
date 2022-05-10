<!DOCTYPE html>
<?php
    include_once "../conf/default.inc.php";
    require_once "../conf/Conexao.php";
    include_once "acao.php";
    $comando = isset($_GET['comando']) ? $_GET['comando'] : "";
    $tabela = "loja";
    $dados;
    if ($comando == 'update'){
    $id = isset($_GET['id']) ? $_GET['id'] : "";
    if ($id > 0)
        $dados = buscarDados($id, $tabela);
    }
    $loj_nome = isset($_POST['LOJ_NOME']) ? $_POST['LOJ_NOME'] : "";
    $loj_estado = isset($_POST['LOJ_ESTADO']) ? $_POST['LOJ_ESTADO'] : "";
    $loj_cidade = isset($_POST['LOJ_CIDADE']) ? $_POST['LOJ_CIDADE'] : "";
    $loj_rua = isset($_POST['LOJ_RUA']) ? $_POST['LOJ_RUA'] : "";
    $loj_numero = isset($_POST['LOJ_NUMERO']) ? $_POST['LOJ_NUMERO'] : "";
    $loj_telefone = isset($_POST['LOJ_TELEFONE']) ? $_POST['LOJ_TELEFONE'] : "";
    ?>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>carGO!</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/loja.css'>
    <script src='../js/main.js'></script>
    <style>
        #searchImg {
            width: 10rem;
            background-color: black;
        }
    </style>
</head>
<body>
    <?php 
    
    
    ?>
    <header>
        <nav class="" id="nav">
            <a href="../index.php"><img class="navItem" id="navTitle" src="../img/carGoLogo.png"></a>
            <a href="../php/login.php"><p class="navItem" id="navLogin"> Login </p><a>
            <a href="qs.php"><p class="navItem" id="navQS"> Quem somos </p></a>
            <a href="../index.php"><p class="navItem" id="navHome"> Home </p></a>
        </nav>
    </header>
    <content>
        <form action="acao.php" method="post" id="form">
            <p class="formItem formText" id="formLocal">Cadastrar Loja</p><br><br><br>
            <p class="formItem formText" id="formLocal">Nome da loja:</p>
            <input required type="text" class="formItem formInput" name="LOJ_NOME" id="LOJ_NOME" value="<?php if ($comando == "update"){echo $dados['LOJ_NOME'];}?>">
            <br><br>
            <p class="formItem formText" id="formDataRetirada">Estado:</p>
            <input required type="text" class="formItem formInput" name="LOJ_ESTADO" id="LOJ_ESTADO" value="<?php if ($comando == "update"){echo $dados['LOJ_ESTADO'];}?>">
            <br><br>
            <p class="formItem formText" id="formDataDevolucao">Cidade:</p>
            <input required type="text" class="formItem formInput" name="LOJ_CIDADE" id="LOJ_CIDADE" value="<?php if ($comando == "update"){echo $dados['LOJ_CIDADE'];}?>">
            <br><br>
            <p class="formItem formText" id="formDataDevolucao">Rua:</p>
            <input required type="text" class="formItem formInput" name="LOJ_RUA" id="LOJ_RUA" value="<?php if ($comando == "update"){echo $dados['LOJ_RUA'];}?>">
            <br><br>
            <p class="formItem formText" id="formDataDevolucao">Número:</p>
            <input required type="number" class="formItem formInput" name="LOJ_NUMERO" id="LOJ_NUMERO" value="<?php if ($comando == "update"){echo $dados['LOJ_NUMERO'];}?>">
            <br><br>
            <p class="formItem formText" id="formDataDevolucao">Telefone:</p>
            <input required type="tel" class="formItem formInput" name="LOJ_TELEFONE" id="LOJ_TELEFONE" value="<?php if ($comando == "update"){echo $dados['LOJ_TELEFONE'];}?>">
            <br><br><br><br>
            <input type="hidden" name="comando" id="" value="<?php if($comando == "update"){echo "update";}else{echo "insert";}?>">
            <input type="hidden" id="tabela" name="tabela" class="tabela" value="loja">
            <input type="hidden" name="id" id="" value="<?php if($comando == "update"){echo $id;}?>">
            <input type="submit" class="formItem formInput" id="acao" value="ENVIAR">
            <br><br><br><br>
        </form>    
    </content>
    <footer class="" id="">
        <img class="footerItem" id="footerLogo" src="../img/carGoLogo.png">
        <br><br><br>
        <p class="footerItem footerText" id="footerInfo">
            Informações ao consumidor: carGO! S/A - CNPJ nº xx.xxx.xxx/xxxx-xx<br>
            Sede: Rua Wenceslau Borini, n° xxx - Canta Galo - CEP: xx.xxx-xxx - Rio do Sul - SC<br>
            Central de Reservas 24h: 0800 xxx xxxx | Assistência a Clientes 24h: 0800 xxx xxxx<br>
            Central de Reservas 24 horas: 0800 xxx xxxx | Assistência a Clientes 24 horas: 0800 xxx xxxx<br>
            E-mail: centraldereservas@cargo.com<br>
        </p>
        <p class="footerItem footerText" id="footerTbm">
            VEJA TAMBÉM:<br><br>

            <a class="footerHyperlink" href="facebook.com"><img class="footerItem" id="footerFacebook" src="../img/facebookLogo.png">Facebook<br></a>
            <a class="footerHyperlink" href="instagram.com"><img class="footerItem" id="footerInstagram" src="../img/instagramLogo.png">Instagram<br></a>
        </p>
        <br><br><br><br><br><br>
        <p class="footerItem footerText " id="footerRights">
            ©carGO! - Todos direitos reservados<br>
        </p>
    </footer>
</body>
</html>

<!DOCTYPE html>
<?php 
    $loj_nome = isset($_POST['LOJ_NOME']) ? $_POST['LOJ_NOME'] : "";
    $loj_estado = isset($_POST['LOJ_ESTADO']) ? $_POST['LOJ_ESTADO'] : "";
    $loj_cidade = isset($_POST['LOJ_CIDADE']) ? $_POST['LOJ_CIDADE'] : "";
    $loj_rua = isset($_POST['LOJ_RUA']) ? $_POST['LOJ_RUA'] : "";
    $loj_numero = isset($_POST['LOJ_NUMERO']) ? $_POST['LOJ_NUMERO'] : "";
    $loj_telefone = isset($_POST['LOJ_TELEFONE']) ? $_POST['LOJ_TELEFONE'] : "";
    $comando = isset($_POST['comando']) ? $_POST['comando'] : "";
    $tabela = isset($_POST['tabela']) ? $_POST['tabela'] : "";
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
            <input type="text" class="formItem formInput" name="LOJ_NOME" id="LOJ_NOME" value="<?php if(isset($_POST["LOJ_NOME"])){ echo $loj_nome;}?>">
            <br><br>
            <p class="formItem formText" id="formDataRetirada">Estado:</p>
            <input type="text" class="formItem formInput" name="LOJ_ESTADO" id="LOJ_ESTADO" value="<?php if(isset($_POST["LOJ_ESTADO"])){ echo $loj_estado;}?>">
            <br><br>
            <p class="formItem formText" id="formDataDevolucao">Cidade:</p>
            <input type="text" class="formItem formInput" name="LOJ_CIDADE" id="LOJ_CIDADE" value="<?php if(isset($_POST["LOJ_CIDADE"])){ echo $loj_cidade;}?>">
            <br><br>
            <p class="formItem formText" id="formDataDevolucao">Rua:</p>
            <input type="text" class="formItem formInput" name="LOJ_RUA" id="LOJ_RUA" value="<?php if(isset($_POST["LOJ_RUA"])){ echo $loj_rua;}?>">
            <br><br>
            <p class="formItem formText" id="formDataDevolucao">Número:</p>
            <input type="number" class="formItem formInput" name="LOJ_NUMERO" id="LOJ_NUMERO" value="<?php if(isset($_POST["LOJ_NUMERO"])){ echo $loj_numero;}?>">
            <br><br>
            <p class="formItem formText" id="formDataDevolucao">Telefone:</p>
            <input type="tel" class="formItem formInput" name="LOJ_TELEFONE" id="LOJ_TELEFONE" value="<?php if(isset($_POST["LOJ_TELEFONE"])){ echo $loj_telefone;}?>">
            <br><br><br><br>
            <input type="hidden" id="comando" name="comando" class="comando" value="insert">
            <input type="hidden" id="tabela" name="tabela" class="tabela" value="loja">
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
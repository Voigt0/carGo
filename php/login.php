<!DOCTYPE html>
<?php 
    $cli_cpf = isset($_POST['CLI_CPF']) ? $_POST['CLI_CPF'] : "";
    $cli_senha = isset($_POST['CLI_SENHA']) ? $_POST['CLI_SENHA'] : "";
    $comando = isset($_POST['comando']) ? $_POST['comando'] : "";
?>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>carGO!</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/login.css'>
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
            <p class="formItem formText" id="formLocal">CPF:</p>
            <input type="text" class="formItem formInput" name="CLI_CPF" id="CLI_CPF" required>
            <br><br>
            <p class="formItem formText" id="formDataRetirada">Senha:</p>
            <input type="password" class="formItem formInput" name="CLI_SENHA" id="CLI_SENHA"required>
            <input type="hidden" class="" name="comando" id="verificar" value="verificar">
            <br><br>
            <input type="submit" class="formItem formInput" id="acao" value="ENVIAR">
            <br><br><br><br>
            <a href="cadastro.php"><p class="formItem formInput" id="logCadPage"> Não tem login? </p><a>
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
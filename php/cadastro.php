<!DOCTYPE html>
<?php 
    $cli_nome = isset($_POST['CLI_NOME']) ? $_POST['CLI_NOME'] : "";
    $cli_sobrenome = isset($_POST['CLI_SOBRENOME']) ? $_POST['CLI_SOBRENOME'] : "";
    $cli_nascimento = isset($_POST['CLI_NASCIMENTO']) ? $_POST['CLI_NASCIMENTO'] : "";
    $cli_telefone = isset($_POST['CLI_TELEFONE']) ? $_POST['CLI_TELEFONE'] : "";
    $cli_email = isset($_POST['CLI_EMAIL']) ? $_POST['CLI_EMAIL'] : "";
    $cli_telefoneres = isset($_POST['CLI_TELEFONERES']) ? $_POST['CLI_TELEFONERES'] : "";
    $cli_cnh = isset($_POST['CLI_CNH']) ? $_POST['CLI_CNH'] : "";
    $cli_cnhvalidade = isset($_POST['CLI_CNHVALIDADE']) ? $_POST['CLI_CNHVALIDADE'] : "";
    $cli_cnhtipo = isset($_POST['CLI_CNHTIPO']) ? $_POST['CLI_CNHTIPO'] : "";
    $cli_cpf = isset($_POST['CLI_CPF']) ? $_POST['CLI_CPF'] : "";
    $cli_senha = isset($_POST['CLI_SENHA']) ? $_POST['CLI_SENHA'] : "";
    $comando = isset($_POST['comando']) ? $_POST['comando'] : "";
    $tabela = isset($_POST['tabela']) ? $_POST['tabela'] : "";
    ?>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>carGO!</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/cadastro.css'>
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
            <p class="formItem formText" id="formLocal">Nome:</p>
            <input type="text" class="formItem formInput" name="CLI_NOME" id="CLI_NOME" value="<?php if(isset($_POST["CLI_NOME"])){ echo $cli_nome;}?>">
            <br><br>
            <p class="formItem formText" id="formDataRetirada">Sobrenome:</p>
            <input type="text" class="formItem formInput" name="CLI_SOBRENOME" id="CLI_SOBRENOME" value="<?php if(isset($_POST["CLI_SOBRENOME"])){ echo $cli_sobrenome;}?>">
            <br><br>
            <p class="formItem formText" id="formDataDevolucao">Nascimento:</p>
            <input type="date" class="formItem formInput" name="CLI_NASCIMENTO" id="CLI_NASCIMENTO" value="<?php if(isset($_POST["CLI_NASCIMENTO"])){ echo $cli_nascimento;}?>">
            <br><br>
            <p class="formItem formText" id="formDataDevolucao">Telefone:</p>
            <input type="tel" class="formItem formInput" name="CLI_TELEFONE" id="CLI_TELEFONE" value="<?php if(isset($_POST["CLI_TELEFONE"])){ echo $cli_telefone;}?>">
            <br><br>
            <p class="formItem formText" id="formDataDevolucao">Email:</p>
            <input type="email" class="formItem formInput" name="CLI_EMAIL" id="CLI_EMAIL" value="<?php if(isset($_POST["CLI_EMAIL"])){ echo $cli_email;}?>">
            <br><br>
            <p class="formItem formText" id="formDataDevolucao">Telefone Reserva:</p>
            <input type="tel" class="formItem formInput" name="CLI_TELEFONERES" id="CLI_TELEFONERES" value="<?php if(isset($_POST["CLI_TELEFONERES"])){ echo $cli_telefoneres;}?>">
            <br><br>
            <p class="formItem formText" id="formDataDevolucao">Número CNH:</p>
            <input type="number" class="formItem formInput" name="CLI_CNH" id="CLI_CNH" value="<?php if(isset($_POST["CLI_CNH"])){ echo $cli_cnh;}?>">
            <br><br>
            <p class="formItem formText" id="formDataDevolucao">Validade da CNH:</p>
            <input type="date" class="formItem formInput" name="CLI_CNHVALIDADE" id="CLI_CNHVALIDADE" value="<?php if(isset($_POST["CLI_CNHVALIDADE"])){ echo $cli_cnhvalidade;}?>">
            <br><br>
            <p class="formItem formText" id="formDataDevolucao">Tipo de CNH:</p>
            <input type="text" class="formItem formInput" name="CLI_CNHTIPO" id="CLI_CNHTIPO" value="<?php if(isset($_POST["CLI_CNHTIPO"])){ echo $cli_cnhtipo;}?>">
            <br><br>
            <p class="formItem formText" id="formDataDevolucao">CPF:</p>
            <input type="number" class="formItem formInput" name="CLI_CPF" id="CLI_CPF" value="<?php if(isset($_POST["CLI_CPF"])){ echo $cli_cpf;}?>">
            <br><br>
            <p class="formItem formText" id="formDataDevolucao">Senha:</p>
            <input type="text" class="formItem formInput" name="CLI_SENHA" id="CLI_SENHA" value="<?php if(isset($_POST["CLI_SENHA"])){ echo $cli_senha;}?>">
            <br><br>
            <br><br><br><br>
            <input type="hidden" id="comando" name="comando" class="comando" value="insert">
            <input type="hidden" id="tabela" name="tabela" class="tabela" value="cliente">
            <input type="submit" class="formItem formInput" id="acao" value="ENVIAR">
            <br><br><br><br>
            <a href="login.php"><p class="formItem formInput" id="logCadPage"> Login </p><a>
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
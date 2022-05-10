<!DOCTYPE html>
<?php
    include_once "conf/default.inc.php";
    require_once "conf/Conexao.php";
    include_once "php/update.php";
    $comando = isset($_GET['comando']) ? $_GET['comando'] : "";
    $tabela = "locacao";
    $dados;
    if ($comando == 'update'){
    $id = isset($_GET['id']) ? $_GET['id'] : "";
    if ($id > 0)
        $dados = buscarDados($id, $tabela);
    }
    $loc_entrada = isset($_POST['LOC_ENTRADA']) ? $_POST['LOC_ENTRADA'] : "";
    $loc_saida = isset($_POST['LOC_SAIDA']) ? $_POST['LOC_SAIDA'] : "";
    $loc_local = isset($_POST['LOC_LOCAL']) ? $_POST['LOC_LOCAL'] : "";
?>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>carGO!</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/main.css'>
    <script src='js/main.js'></script>
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
            <a href="index.php"><img class="navItem" id="navTitle" src="img/carGoLogo.png"></a>
            <a href="php/login.php"><p class="navItem" id="navLogin"> Login </p><a>
            <a href="php/qs.php"><p class="navItem" id="navQS"> Quem somos </p></a>
            <a href="index.php"><p class="navItem" id="navHome"> Home </p></a>
        </nav>
        <!--<button onclick="mostrarSearch()" id="buttonSearch"><img id="searchImg" src="img/arrowDown.png"></button>-->
        <div id="search">
            <form action="php/acao.php" method="post">
                <p class="searchItem searchText" id="searchLocal">Local de retirada:</p>
                <select class="searchItem searchInput" name="LOC_LOCAL" id="searchLocal" value="">
                <?php
                $pdo = Conexao::getInstance();
                $consulta = $pdo->query("SELECT LOJ_NOME FROM loja");
                while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                ?>
                <option name="LOC_LOCAL" value="<?php echo $linha['LOJ_NOME']; ?>" <?php if ($comando == "update" && $linha['LOJ_NOME'] == $dados['LOC_LOCAL']){echo "selected";}?>><?php echo $linha['LOJ_NOME'];?></option>
                <?php } ?>
                </select>
                <br><br>
                <p required class="searchItem searchText" id="searchDataRetirada">Data de retirada:</p>
                <input required type="date" class="searchItem searchInput" name="LOC_ENTRADA" id="searchDataRetirada" value="<?php if ($comando == "update"){echo $dados['LOC_ENTRADA'];}?>">
                <br><br>
                <p class="searchItem searchText" id="searchDataDevolucao">Data de devolução:</p>
                <input required type="date" class="searchItem searchInput" name="LOC_SAIDA" id="searchDataDevolucao" value="<?php if ($comando == "update"){echo $dados['LOC_SAIDA'];}?>">
                <br><br>
                <input type="hidden" name="comando" id="" value="<?php if($comando == "update"){echo "update";}else{echo "insert";}?>">
                <input type="hidden" name="tabela" id="" value="locacao">
                <input type="hidden" name="id" id="" value="<?php if($comando == "update"){echo $id;}?>">
                <input type="submit" class="searchItem searchInput" name="" id="" value="Enviar">
            </form>
        </div>
    </header>
    <content>
        <div class="texto" id="loreIpsum">
        <img src="img/catalogo.png" style="margin: auto;">
        </div>
        <div class="texto" id="adm">
            <a href="php/menu.php" id="adm">ADMINISTRADOR DE TABELAS</a>
        </div>
    </content>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <footer class="" id="">
        <div id="footerContent">
        <img class="footerItem" id="footerLogo" src="img/carGoLogo.png">
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

            <a class="footerHyperlink" href="facebook.com"><img class="footerItem" id="footerFacebook" src="img/facebookLogo.png">Facebook<br></a>
            <a class="footerHyperlink" href="instagram.com"><img class="footerItem" id="footerInstagram" src="img/instagramLogo.png">Instagram<br></a>
        </p>
        <br><br><br><br><br><br>
        <p class="footerItem footerText " id="footerRights">
            ©carGO! - Todos direitos reservados<br>
        </p>
        </div>
    </footer>
</body>
</html>
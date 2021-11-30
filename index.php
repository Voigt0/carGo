<!DOCTYPE html>
<?php 
    $loc_entrada = isset($_POST['LOC_ENTRADA']) ? $_POST['LOC_ENTRADA'] : "";
    $loc_saida = isset($_POST['LOC_SAIDA']) ? $_POST['LOC_SAIDA'] : "";
    $comando = isset($_POST['comando']) ? $_POST['comando'] : "";
    $tabela = isset($_POST['tabela']) ? $_POST['tabela'] : "";
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
        <!--<button onclick="mostrarSearch()" id="buttonSearch"><img id="searchImg" src="img/arrowDown.png"></button>
    --><div id="search">
            <form action="php/acao.php" method="post">
                <p class="searchItem searchText" id="searchLocal">Local de retirada:</p>
                <input type="text" class="searchItem searchInput" name="" id="searchLocal">
                <br><br>
                <p class="searchItem searchText" id="searchDataRetirada">Data de retirada:</p>
                <input type="date" class="searchItem searchInput" name="LOC_ENTRADA" id="searchDataRetirada" value="<?php if(isset($_POST["LOC_ENTRADA"])){ echo $loc_entrada;}?>">
                <br><br>
                <p class="searchItem searchText" id="searchDataDevolucao">Data de devolução:</p>
                <input type="date" class="searchItem searchInput" name="LOC_SAIDA" id="searchDataDevolucao" value="<?php if(isset($_POST["LOC_SAIDA"])){ echo $loc_saida;}?>">
                <br><br>
                <input type="hidden" name="comando" id="" value="insert">
                <input type="hidden" name="tabela" id="" value="locacao">
                <input type="submit" class="searchItem searchInput" name="" id="" value="Enviar">
            </form>
        </div>
    </header>
    <content>
        <div class="texto" id="loreIpsum">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ut faucibus massa. Aenean at tortor lacinia, blandit felis sit amet, placerat eros. Proin ullamcorper orci et lectus fermentum luctus. Vivamus quis porttitor massa, nec tincidunt eros. Morbi vel quam convallis dui fermentum pellentesque in ac nisi. Mauris gravida iaculis massa non sodales. Aliquam lorem nisi, vulputate sit amet tristique ac, condimentum sed dolor. Aliquam fermentum massa sed diam convallis, nec blandit urna fringilla. Integer ac mi quis ipsum mattis sagittis quis non eros. Fusce gravida augue sed nunc vulputate suscipit. Pellentesque nulla odio, porttitor id rhoncus id, congue eu orci. Aenean consequat porta ipsum, et placerat tellus fringilla vel. Cras dapibus, ligula ut auctor porta, sem sem tincidunt erat, eget lobortis ligula nibh vitae eros. In vel rhoncus nunc. Aenean ut viverra nibh. Fusce interdum nunc id dictum facilisis.

            Curabitur viverra nibh enim, at imperdiet dolor pellentesque sit amet. Proin convallis tempor tortor quis euismod. Nullam facilisis mi ac turpis congue, non mollis sem iaculis. Integer pharetra quis enim a aliquam. Vivamus ut ipsum et libero consequat lacinia. Donec posuere rhoncus lorem, quis lobortis neque vulputate vitae. Sed varius dui ac enim lobortis, id consectetur purus porttitor. Curabitur orci lectus, dapibus non malesuada at, scelerisque sit amet urna. Fusce laoreet neque ut erat pulvinar, in ultricies felis tristique. Nunc tempus non libero ac bibendum. Nulla a sollicitudin nisi.
        </p>
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
<!DOCTYPE html>
<?php   
   include_once "../conf/default.inc.php";
   require_once "../conf/Conexao.php";
   
   $title = "CLIENTE";
   $busca = isset($_POST["busca"]) ? $_POST["busca"] : "CLI_ID";
   $procurar = isset($_POST["procurar"]) ? $_POST["procurar"] : "";
?>
<html>
<head>
    <meta charset="UTF-8">
    <title> <?php echo $title; ?> </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="">
    <?php include_once "menu.php"; ?>
    <form method="post">
        <input type="radio" id="CLI_ID" name="busca" value="CLI_ID" <?php if($busca == "CLI_ID"){echo "checked";}?>>
        <label for="huey"><h3>#ID</h3></label><br>
        <input type="radio" id="CLI_NOME" name="busca" value="CLI_NOME" <?php if($busca == "CLI_NOME"){echo "checked";}?>>
        <label for="huey"><h3>NOME</h3></label><br> 
        <input type="radio" id="CLI_EMAIL" name="busca" value="CLI_EMAIL" <?php if($busca == "CLI_EMAIL"){echo "checked";}?>>
        <label for="huey"><h3>EMAIL</h3></label><br>
        <input type="radio" id="CLI_NASCIMENTO" name="busca" value="CLI_NASCIMENTO" <?php if($busca == "CLI_NASCIMENTO"){echo "checked";}?>>
        <label for="huey"><h3>NASCIMENTO</h3></label><br>
        <br><br>
        <div class="" style="padding-left: 10%;">
            <legend>Procurar: </legend>
            <input type="text"   name="procurar" id="procurar" size="37" value="<?php echo $procurar;?>">
            <button type="submit" class="btn btn-dark" name="acao" id="acao">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
            </svg>
            </button>
            <br><br>
        </div>
            <div class="">
            <table class="table table-striped">
                <thead>
                    <tr class="table-dark">
                        <th scope="col">#ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Sobrenome</th>
                        <th scope="col">Nascimento</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Telefoneres</th>
                        <th scope="col">CNH</th>
                        <th scope="col">Validade CNH</th>
                        <th scope="col">Tipo CNH</th>
                        <th scope="col">CPF</th>
                        <th scope="col">Senha</th>
                        <th scope="row">DETALHE</th>
                        <th scope="row">ALTERAR</th>
                        <th scope="row">EXCLUIR</th>
                    </tr>
                </thead>
                <tbody>
    <?php
        $type = "LIKE";
        $procurar = "'%". trim($procurar) ."%'";
        if($busca != "CLI_ID" && $busca != "CLI_NOME" && $busca != "CLI_EMAIL"){
            $type = "<=";
        $procurar = ($_POST["procurar"]);
            if(is_numeric($procurar) == false){
                $procurar = 9999;
            }
        }
        $pdo = Conexao::getInstance();
        $consulta = $pdo->query("SELECT * FROM cliente 
                                 WHERE $busca $type $procurar
                                 ORDER BY $busca");
        
            while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
    ?>
                    <tr>
                        <th scope="row"><?php echo $linha['CLI_ID'];?></th>
                        <td scope="row"><?php echo $linha['CLI_NOME'];?></td>
                        <td scope="row"><?php echo $linha['CLI_SOBRENOME'];?></td>
                        <td><?php echo date("d/m/Y", strtotime($linha['CLI_NASCIMENTO']));?></td>
                        <td scope="row"><?php echo $linha['CLI_TELEFONE'];?></td>
                        <td scope="row"><?php echo $linha['CLI_EMAIL'];?></td>
                        <td scope="row"><?php echo $linha['CLI_TELEFONERES'];?></td>
                        <td scope="row"><?php echo $linha['CLI_CNH'];?></td>
                        <td><?php echo date("d/m/Y", strtotime($linha['CLI_CNHVALIDADE']));?></td>
                        <td scope="row"><?php echo $linha['CLI_CNHTIPO'];?></td>
                        <td scope="row"><?php echo $linha['CLI_CPF'];?></td>
                        <td scope="row"><?php echo $linha['CLI_SENHA'];?></td>
                        <td scope="row">DETALHE</td>
                        <td scope="row">ALTERAR</td>
                        <td><a onclick="return confirm('Deseja mesmo excluir?')" href="acao.php?id=<?php echo $linha['CLI_ID'];?>&table=cliente&delete=true"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16"><path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/><path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/></svg></a></td>
                    </tr>
    <?php } ?> 
                </tbody>
            </table>
            </div>
    </form>
</body>
</html>
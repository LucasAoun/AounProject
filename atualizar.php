<?php 
include("functions.min.php");
$usuario = selectUsuario($_POST["id_usuario"]);
//var_dump($usuario);

?>
<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MontarSite</title>

    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/efeitofade.css">
    <script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>
    <div class="container-fluid loginbg">
      <br><br>
      <center>
        <div class="loginbox">
          <form action="functions.min.php" method="POST">
            <br>
            <div class="row">
              <div class="col-md-12"><input class="form-control" type="hidden" name="id_usuario" id="id_usuario"> </div>
              <div class="col-md-12"><input class="form-control" type="text" name="nome" id="nome" value="<?=$usuario["nm_usuario"]?>" size="20" placeholder="Nome completo" required> </div>
              <div class="col-md-12"><input class="form-control" type="date" name="nascimento" id="nascimento" value="<?=$usuario["dt_usuario"]?>" placeholder="Data de nascimento" required> </div>
              <div class="col-md-12"><input class="form-control" type="email" name="email" id="email" value="<?=$usuario["mail_usuario"]?>" size="20" placeholder="Email" required> </div>
              <div class="col-md-12"><input class="form-control" type="text" name="rg" id="rg" value="<?=$usuario["rg_usuario"]?>" placeholder="RG" required> </div>
              <div class="col-md-12"><input class="form-control" type="hidden" name="acao" id="acao" value="alterar"></div>
              <div class="col-md-12"><input class="form-control" type="hidden" name="id_usuario" id="id_usuario" value="<?=$usuario["id_usuario"]?>"></div>

              </div>
            <br>
            <div class="row">
                <div class="col-md-12"><input type="submit" class="btn btn-success form-control" value="Atualizar"></div>
            </div>
          </form>
          <div class="row">
           <div class="col-md-12"><a href="listagem.php"><button class="btn btn-primary form-control">Listar</button>
          </div>
        </div>
      </center>
    </div>

    
    
</body>
</html>
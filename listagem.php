<?php 
ini_set('display_errors', 0 );
error_reporting(0);

 include("functions.min.php");
    $listar = listar();
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
      <table class="table table-responsive-sm table-responsive-md table-responsive-lg table-hover table-dark">
  <thead>
    <tr>
      <th scope="col col-xs-12">#</th>
      <th scope="col col-xs-12">Nome</th>
      <th scope="col col-xs-12">Data de nascimento</th>
      <th scope="col col-xs-12">Email</th>
      <th scope="col col-xs-12">RG</th>
      <th scope="col col-xs-12">Ultima atualização</th>
      <th scope="col col-xs-12"></th>
      <th scope="col col-xs-12"></th>   
    </tr>
</thead>
  <tbody>
  <?php if ($listar > 1){foreach ($listar as $usuario) {?>
    <tr>
      <th scope="row"><?= $usuario ['id_usuario'];?></th>
      <td><?=$usuario ['nm_usuario'];?></td>
	  <td><?=$usuario ['dt_usuario'];?></td>
	  <td><?=$usuario ['mail_usuario'];?></td>
      <td><?=$usuario ['rg_usuario'];?></td>
      <td><?=$usuario ['reg_usuario'];?></td>
      <td>
      <td>
        <form name="atualizar" action="atualizar.php" method="POST">
        <div class="col-md-12"><input class="form-control" type="hidden" name="id_usuario" id="id_usuario"
        value=<?=$usuario["id_usuario"]?>> </div>
      <div class="col-md-12"><input type="submit" class="btn btn-primary form-control" value="Atualizar"></div>
        </form>
        <form action="functions.min.php" method="POST">
        <div class="col-md-12"><input class="form-control" type="hidden" name="id_usuario" id="id_usuario"
        value=<?=$usuario["id_usuario"]?>> </div>
        <div class="col-md-12"><input class="form-control" type="hidden" name="acao" value="excluir"></div>
      <div class="col-md-12"><input type="submit" class="btn btn-danger form-control" value="Excluir"></div>
        </form>
      </td>
        
    </tr>
    
    <?php }}?>
  </tbody>
</table>
<div class="row">
<div class="col-md-12"><a href="index.php"><button class="btn btn-success form-control">Registrar</button>
</div>
  </div>
    
    
</body>
</html>
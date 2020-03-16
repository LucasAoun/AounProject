<?php 

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
              <div class="col-md-12"><input class="form-control" type="text" name="nome" id="nome" placeholder="Nome completo" required> </div>
              <div class="col-md-12"><input class="form-control" type="date" name="nascimento" id="nascimento" placeholder="Data de nascimento" required> </div>
              <div class="col-md-12"><input class="form-control" type="email" name="email" id="email" placeholder="Email" required> </div>
              <div class="col-md-12"><input class="form-control" type="text" name="rg" id="rg" placeholder="RG" required> </div>
              <div class="col-md-12"><input class="form-control" type="hidden" name="acao" id="acao" value="inserir"></div>

              </div>
            <br>
            <div class="row">
                <div class="col-md-12"><input type="submit" class="btn btn-success form-control" value="Registrar"></div>
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
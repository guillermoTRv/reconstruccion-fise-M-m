<?php 
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
    global $op;      $op      = addslashes(htmlspecialchars(strip_tags(trim($_GET['op']))));
    global $metaria; $materia = "Calculo avanzado"; 
    include("../ruta.php");
    include("../config.php");
    include("../input_toquen.php");

?>
<!DOCTYPE html>
<html>
<head>
  <title>Calculo multivariable y vectorial</title>
    <meta name="viewport" content="width=device-width,  initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <link rel="shortcut icon" href="../image/icono.jpg">
    <link rel="stylesheet" href="../css/bootstrapset.css">
    <link rel="stylesheet" href="../css/port.css">
    <link rel="stylesheet" href="../js/bootstrap.js">

    <style type="text/css">
        .bn{
          color:#404040;
        }
        .n{border-radius: }

        a.fenmat:hover,
        a.fenmat:focus {
          color: white;
          text-decoration: none;
          background-color:rgba(151, 84, 45, .9);
        }
    </style>
    <?php 
          $color_batalla = "rgba(151, 84, 45, .9)"; 
          $img_mat       = "cmv";
    ?>
</head>

<body>
  <?php 
        include("../header.php");
    ?>
    <div class="container-fluid">
      <div class="row">
        <?php 
          require("../vistas_principales/practicas/barra_izquierda.php"); 
        ?>
        <div class="col-md-9 columrigth">
          <div class="panel panel-default">
              <?php  
                require("../scripts/practicas/controlador_vistacentral.php");
              ?>
              <br>
              <div class="row">
                <center>
                <div style="border-bottom:solid #f2f2f2 2px;margin-left:13px;margin-right:13px;margin-bottom:60px;"><p></strong></p><br></div>
                </center>
              </div>
          </div>
        </div>
      </div>
    </div>

    <script src="http://code.jquery.com/jquery.js"></script>
  <script src="../js/bootstrap.min.js"></script>    
</body>
</html>
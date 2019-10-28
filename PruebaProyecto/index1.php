<!DOCTYPE html>
<html>
<head>
	<title>Formulario Galeria</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css.css">
   <script type="text/javascript" src="validaciones.js"></script>
   <style type="text/css">
     
   </style>
</head>
<body>
  <style type="text/css">
  body{background:#778899;}
   </style>

    <?php
    //Mantengo la sesión. Por ende puedo utilizar la variable $_SESSION anteriormente configurada
    session_start();
    if(isset($_SESSION['nombre'])){
      echo "<a href='logout.proc.php'>Cerrar sesión de ".$_SESSION['nombre']."</a>&nbsp;&nbsp;";
    }else{
      header("Location: index.php");
    }
    ?>

    <form action="regristro.php" method="POST" name="formulario" enctype="multipart/form-data" onsubmit="return segundavalidacion()">

        <h1>¡Galeria de Imagenes!</h1>

            <br>
        <!-- Campo Nombre-->
        <input type="text" id="nombre"  placeholder="Titulo Foto..." name="nombre" >
            <br>

        <!--Campo archivo-->

        <input type="file" id="imagen" name="imagen" lang="es">
            <br>
        <!--Boton enviar--> 

       <input type="submit" class="btn btn-primary" value="Enviar archivo">

       <br>

      </form>
    <div class="Formulario">


   <?php
    include "conectar.php";
    //Consulta en la base de datos con los parámetros del filtro
    $id=$_SESSION['id'];

    $txt_emp="SELECT * from galeriaimagenes WHERE id_usuario='$id'";

    $qry_emp=mysqli_query($conn,$txt_emp);

      while($reg=mysqli_fetch_array($qry_emp)){
        $img=$reg['directorio'];
        $id_img=$reg['id'];
        echo '<div id="pack">';
        echo "<div id='foto' style='width: 500px; margin: 0 auto;'><img src='".$img."' style='width:100%'> </a> </div>";
        
          echo '<div id="titulo"><p><b>';
        echo utf8_encode($reg["archivo"])."    ";
        echo '</b></p></div>';

        echo '</div></br>';

      }
      
    ?>

</div>
</body>
</html>
<?php
    $ip="localhost";
    $login="root";
    $password="";
    $db_name="galeria_imagenes";
    include "conectar.php";
    include "header.php";
    //Conexión con la base de datos
    $conn=mysqli_connect ($ip,$login,$password,$db_name) or die();// conexion a la bd
    $idfk=$_SESSION['id'];
if(isset($_REQUEST['nombre'])){
         
         //AQUI MUESTRA LA FECHA QUE HAYAS SUBIDO LA FOTO 
        $date = date("Y-m-d");
        //AQUI MUESTRA EL DIRECTORIO DONDE SE ENCUENTRA LA FOTO 
        $fichero = 'directoriofotos/'.basename($_FILES['imagen']['name']);
        //AQUI NOS ENSEÑA EL NOMBRE DE LAS FOTOS 
        $name = $_REQUEST['nombre'];
        // ESTO ES PARA QUE LO MUESTRE POR PANTALLA 
         echo $name;
         echo $fichero;
         echo $date;
         if(move_uploaded_file($_FILES['imagen']['tmp_name'], $fichero)){
        //Insert image content into database
        $sql = "INSERT into galeriaimagenes (archivo,directorio,fecha,id_usuario) VALUES ('$name','$fichero','$date','$idfk')";
        echo $sql;
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
  }
}
?>
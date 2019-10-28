		<?php
	//Variables para la conexión con la base de datos
	$ip="localhost";
	$login="root";
	$password="";
	$db_name="galeria_imagenes";

	//Conexión con la base de datos
	$conn=mysqli_connect ($ip,$login,$password,$db_name) or die();

	// //Consulta en la base de datos con los parámetros del filtro
	 // $txt_emp="SELECT * from galeriaimagenes ";
	 // $qry_emp=mysqli_query($conn,$txt_emp);
	
?>
<?php
include "conectar.php";

$user = $_REQUEST['user'];
$pass = $_REQUEST['password'];
$encript = md5($pass);

//Entra si está configurada la variable del formulario del login
if(isset($_REQUEST['user'])){

	$query = "SELECT * FROM usuarios WHERE Nombre_usuario='$user' AND password_usuario='$encript'";

	$result = mysqli_query($conn,$query);
	//La variable $result debería de tener como mínimo un registro coincidente
	echo $query;
	if(!empty($result) && mysqli_num_rows($result)==1){
		$row = mysqli_fetch_array($result);
		//Creo una nueva sesión y defino $_SESSION['nombre']
		session_start();
		
		$_SESSION['nombre']=$user;
		$_SESSION['id']=$row['id_usuario'];
		echo $_SESSION['id'];
		//Voy a mi sitio personal
		header("Location: index1.php");
	}else{
		//Ha fallado la autenticación vuelvo a index.php
		header("Location: index.php?error=1&us=".$user);
	}
//Si no está configurada la variable del formulario del login vuelve al index.php
}else{
	header("Location: index.php");
}	
?>
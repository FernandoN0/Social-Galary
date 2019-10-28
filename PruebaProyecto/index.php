<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<script type="text/javascript" src="validaciones.js"></script>
</head>
<body>
	<!-- <h1>Inicio de sesion</h1> -->
	<style type="text/css">
		@import "compass/css3";
@import url(https://fonts.googleapis.com/css?family=Vibur);
*{
  box-sizing:border-box;
  -moz-box-sizing:border-box;
  -webkit-box-sizing:border-box;
  font-family:arial;
}
body{background:#FF9000;}
h1{
  color:#ccc;
  text-align:center;
  font-family: 'Vibur', cursive;
  font-size: 50px;
}

.login-form{
  width:350px;
  padding:40px 30px;
  background:#eee;
  @include border-radius(4px);
  margin:auto;
  position: absolute;
  left: 0;
  right: 0;
  top:50%;
  @include translateY(-50%);
  margin-top: -20%;
}
.form-group{
  position: relative;
  margin-bottom:15px;
}
.form-control{
  width:100%;
  height:50px;
  border:none;
  padding:5px 7px 5px 15px;
  background:#fff;
  color:#666;
  border:2px solid #ddd;
  @include border-radius(4px);
    &:focus, &:focus + .fa{
      border-color:#10CE88;
      color:#10CE88;
    }
}
.form-group .fa{
  position: absolute;
  right:15px;
  top:17px;
  color:#999;
}
.log-status.wrong-entry {
 @include animation( wrong-log 0.3s);
}
.log-status.wrong-entry .form-control, .wrong-entry .form-control + .fa {
  border-color: #ed1c24;
  color: #ed1c24;
}
.log-btn{
  background:#0AC986;
  dispaly:inline-block;
  width:100%;
  font-size:16px;
  height:50px;
  color:#fff;
  text-decoration:none;
  border:none;
  @include border-radius(4px);
}

.link{
  text-decoration:none;
  color:#C6C6C6;
  float:right;
  font-size:12px;
  margin-bottom:15px;
  &:hover{
    text-decoration: underline;
    color:#8C918F;
  }
}
.alert{
  display:none;
  font-size:12px;
  color:#f00;
  float:left;
}
@include keyframes (wrong-log) {
  0%, 100% { left: 0px;}
  20% , 60%{left: 15px;}
  40% , 80%{left: -15px;}
}


	</style>	

	<div class="login-form">
    <h1>Inicio de sesion de Galeria</h1>
	<form class="form-group" method="post" action="login.proc.php" onsubmit="return primeravalidacion()">
		<input type="text" class="form-control" id="user"  name="user"  value="<?php if (isset($_REQUEST['us'])){
			echo $_GET['us'];
			}else{
				echo " ";
			}
		 ?>" placeholder="Inserta el usuario..."><br/>
		<input type="password" class="form-control" id="password"name="password" placeholder="Inserta el password"><br/><br/>
		<input type="submit" name="Enviar">
		<i class="fa fa-lock"></i>
	</form> 
	    </div>
	    <?php 
	    if(isset($_REQUEST['error'])){;
	    	echo "El usuario o la contraseña son incorrectos.";
	    }
	    ?>

</body>
</html>
//muestra un alert si alguno de los campos no esta relleno
function primeravalidacion(){
	//trae el elemento nombre
	  // alert('Algun campo esta vacio!');
	var nom = document.getElementById('user').value;
	//trae el elemento email
	var contra = document.getElementById('password').value;
	if (nom == '' || contra =='') {
		 alert('Algun campo esta vacio!');
		return false;
	}else{
		return true;
	}
}


// segunda validacion 

function segundavalidacion(){
	var nombre = document.getElementById('nombre').value;
	var imagen = document.getElementById('imagen').value;
 
    alert('Asigna las cosas!');

	if (poten == '' || poten =='') {
		if (poten == '') {
			document.getElementById('nombre').style.border = '2px solid red';
		}else{
			document.getElementById('nombre').style.border = '1px solid #ccc';
		}
		if (poten == '') {
			document.getElementById('imagen').style.border = '2px solid red';
		}else{
			document.getElementById('imagen').style.border = '1px solid #ccc';
		}

		return false;
	}else{
		return true;
	}
}

// // //tercera validacion

// function terceravalidacion(){
// 	var nom = document.getElementById('nombre').value;
// 	var imagen = document.getElementById('imagen').value;

// 	if (nom =='' && imagen==''){
// 		document.getElementById('mensaje').innerHTML = 'El campo nombre y email son obligatorios!';
// 		document.getElementById('mensaje').style.display = 'block';
// 		return false;
// 	}else if (nom ==''){
// 		document.getElementById('mensaje').innerHTML = 'El campo nombre es obligatorio!';
// 		document.getElementById('mensaje').style.display = 'block';
// 		return false;
// 	}else if (imagen == ''){
// 		document.getElementById('mensaje').innerHTML = 'El campo email es obligatorio!';
// 		document.getElementById('mensaje').style.display = 'block';
// 		return false;
// 	}else{
// 		return true;
// 	}
// }
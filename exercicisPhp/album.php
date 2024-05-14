<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ficha producto - imágenes</title>
	<meta name="author" content="francesc ricart">
	<style>
		*{box-sizing:border-box;}
		div{
			float:left;
		}
		.contenedor-producto{
			width:600px;
			height:550px;
			margin:auto;		
		}

		.imagen-principal{
			width:100%;
			height:400px;
			border:1px solid #ff0000;
		}
		[class *= "subImagen-"]{
			width:25%;
			height:150px;
			border:1px solid #0000ff;
		}
	</style>
</head>
<body>
	
	<div class="contenedor-producto">
		<div class="imagen-principal"></div>
		<div class="subImagen-1"></div>
		<div class="subImagen-2"></div>
		<div class="subImagen-3"></div>
		<div class="subImagen-4"></div>
        <img src= "laura/img/descarga(1)"
	</div>
<php
    var zFondos150 = ["url('foto1-150.jpg')","url('foto2-150.jpg')","url('foto3-150.jpg')","url('foto4-150.jpg')"];
var zFondos600 = ["url('foto1-600.jpg')","url('foto2-600.jpg')","url('foto3-600.jpg')","url('foto4-600.jpg')"];

var imagenPrincipal = document.querySelectorAll(".imagen-principal")[0];
var subImagenes = document.querySelectorAll('[class *= "subImagen-"]');

imagenPrincipal.style.backgroundImage =zFondos600[0];
subImagenes[0].style.backgroundImage =zFondos150[0];
subImagenes[1].style.backgroundImage =zFondos150[1];
subImagenes[2].style.backgroundImage =zFondos150[2];
subImagenes[3].style.backgroundImage =zFondos150[3];

subImagenes[0].addEventListener("mouseover",accion0);
subImagenes[1].addEventListener("mouseover",accion1);
subImagenes[2].addEventListener("mouseover",accion2);
subImagenes[3].addEventListener("mouseover",accion3);

function accion0(){imagenPrincipal.style.backgroundImage =zFondos600[0];}
function accion1(){imagenPrincipal.style.backgroundImage =zFondos600[1];}
function accion2(){imagenPrincipal.style.backgroundImage =zFondos600[2];}
function accion3(){imagenPrincipal.style.backgroundImage =zFondos600[3];} 
?>  
</body>
</html>
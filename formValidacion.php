<?php
// verificamos que se ha enviado el formulario
if($_SERVER["REQUEST METHOD"]=="POST" && isset($_POST["send"])){
    $username= validate_input ($_POST ["username"]);
    $password = validate_input ($_POST["password"]);
}

$passwordCodificado = sha1 (md5 ($password));
//verificar credenciales (seria con BBDD)psw codif hacer eco xa ver encriptado
if ($username == "test" && 
$passwordCodificado = "VERencriptado" ){
    session_start([
    'use_only_cookies'=> 1,
    'cookie_lifetime' => 0,
    'cokkie_secure' => 1,
    'cookie_httponly' =>1

]);
}
//almacenar ID de usuario de la sesion (esto en la app seria mas complejo)
$_SESSION ['user_id'] = 1;

// verificar que el usuario ha clicado el remember me, creamos cookie
if (isset ($_POST ["remember"])){
    
    //crear una cookie para recordar el usuario
    $cookie_name = "remember_me";
    $cookie_value =1; // podria ser el token o el id de usuario
    $cookie_expry_time = time () + (24*3600); //un dia
    setcookie ($cookie_name, $cookie_value, $cookie_expry_time,"/","",true,true);

    header("location:home.php");  //redirigimos a pagina
}
else { //si credenciales no correctas
    header("location:rememberFormulario.php?err=1");

}
<?php
$myemail='luftoben@gmail.com';

if (isset($_POST['telefono'])) {
	$fono=$_POST['telefono'];
}else{
	$fono='';
}

if($_POST){
	$name=trim(stripslashes($_POST['nombre']));
	$apellidos=trim(stripslashes($_POST['apellidos']));
	$email=trim(stripslashes($_POST['email']));
	$asunto=trim(stripslashes($_POST['asunto']));
	$telefono=trim(stripslashes($_POST['telefono']));
	$mensaje=trim(stripslashes($_POST['mensaje']));


	//---se crea mensaje
	$msj=null;
	$error=null;

	$msj .="Enviado por: ".$name." ".$apellidos."<br />";
	$msj .="Email: ".$email."<br />";
	$msj .="Asunto: ".$asunto."<br />";
	$msj .="Mensaje <br />";
	$msj .=$mensaje."telefono: ".$telefono;
	$msj .= "<br /> ----- <br /> Este correo es enviado desde su pagina web www.LuftLab.cl <br />";

//cabecera


// Set From: header
   $from =  $name . " <" . $email . ">";



$headers = 'From: '.$from."\r\n".
 
'Reply-To: '.$from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($myemail, $asunto, $msj, $headers);  



   if (!$error) {

      ini_set("sendmail_from", $myemail); // for windows server
      $mail = mail($myemail, $asunto, $msj, $headers);

		if ($mail) { echo "OK"; }
      else { echo "A ocurrido un error. Contactenos a luftoben@gmail.com."; }
		
	} # end if - no validation error

	else {
		echo "<script>";
		echo "action('Ingresado')";
		echo "</script>";

		$response = (isset($error['nombre'])) ? $error['nombre'] . "<br /> \n" : null;
		$response .= (isset($error['asunto'])) ? $error['asunto'] . "<br /> \n" : null;
		$response .= (isset($error['email'])) ? $error['email'] . "<br /> \n" : null;
		$response .= (isset($error['mensaje'])) ? $error['mensaje'] . "<br />" : null;
		
		echo $response;

	} # end if - there was a validation error
	

}

?>
<?php
 
if(isset($_POST['contactEmail'])) {
 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "jonathan.delgado25@gmail.com";
 
   
 
     
 
     
 
    function died($error) {
 
        // your error code can go here
 
        echo "Lo sentimos mucho , pero había un error ( s ) encontrado con la forma que ha enviado. ";
 
        echo "Estos errores aparecen a continuación<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Por favor, volver atrás y corregir estos errores .<br /><br />";
 
        die();
 
    }
 
     
 
    // validation expected data exists
 
    if(!isset($_POST['nombre']) ||
 
        !isset($_POST['apellidos']) ||
 
        !isset($_POST['asunto']) ||

        !isset($_POST['email']) ||

        !isset($_POST['tele']) ||
 
        !isset($_POST['mensaje'])) {
 
        died('Lo sentimos , pero parece que hay un problema con la forma que ha enviado .');       
 
    }
 
     
    $email_subject = $_POST['asunto'];

    $first_name = $_POST['nombre']; // 

    $last_name = $_POST['apellidos']; // required
 
    $email_from = $_POST['email']; // required
 
    $comments = $_POST['mensaje']; // required

    $telefono= $_POST['telefono'];
 
     
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
 
    $error_message .= 'La dirección de correo electrónico que ha introducido no parece ser válido .<br />';
 
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
 
    $error_message .= 'El primer nombre que ha especificado no parece ser válido.<br />';
 
  }
 
 
  if(strlen($comments) < 2) {
 
    $error_message .= 'El mensaje enviado parece no ser Valido.<br />';
 
  }
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
    $email_message = "Detalles del formulario a continuación.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "contactLname: ".clean_string($first_name)."\n";
 
    $email_message .= "contactEmail: ".clean_string($email_from)."\n";
 
    $email_message .= "contactMessage: ".clean_string($telefono)."\n";
 
    $email_message .= "contactSubject: ".clean_string($comments)."\n";
 
    $email_message .= "contactFname: ".clean_string($comments)."\n";
  
 
     
 
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 
?>
 
 
 
<!-- include your own success html here -->
 
 
 

Gracias por contactarnos. Estaremos en contacto con usted muy pronto.
 
 
 
<?php
 
}
 
?>
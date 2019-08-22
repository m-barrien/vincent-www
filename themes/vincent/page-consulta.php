<?php
/*
Template Name: Serve formulario
*/
//Importamos las variables del formulario de contacto
require_once("wp-load.php");

@$Nombre = htmlspecialchars($_POST['cname']);
@$Telefono = htmlspecialchars($_POST['cphone']);
@$Correo = htmlspecialchars($_POST['cmail']);
@$Motivo = "Consulta";//strtoupper(htmlspecialchars($_POST['cmotivo']));
@$Mensaje = htmlspecialchars($_POST['cmessage']);
@$Direccion = htmlspecialchars($_POST['Direccion']);
@$Proyecto = htmlspecialchars($_POST['Proyecto']);
@$Metros = htmlspecialchars($_POST['Metros']);
@$Techo = htmlspecialchars($_POST['Techo']);

//Preparamos el mensaje de contacto
$cabeceras = "MIME-Version: 1.0" . "\r\n";
$cabeceras .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$cabeceras .= "From: $Correo\r\n" //La persona que envia el correo
 . "Reply-To: $Correo\r\n";
$asunto = "$Motivo VINCENT SOLAR \n"; //asunto aparecera en la bandeja del servidor de correo
$email_to = "marcelo@vincentsolar.com"; //cambiar por tu email
$contenido = "
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
 <head>
  <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
  <title>Consulta VincentSolar</title>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'/>
</head>
  
<body style='margin: 0; padding: 0; font-family: arial;font-size: 15pt;'>
<div style='width:600px;margin-left: auto;margin-right: auto;'  >
 <div style='background: #2b6daf; border-radius: 20px 20px 0 0; height: auto;'>
   <p style='color:white; display; block; padding: 15px; font-weight:bold'>
      Formulario Vincent Solar
   </p>
 </div>
  <div style='background: #eee'>
    <div style='padding:10px'>
      Se ha enviado un formulario de contacto desde el sitio web www.vincentsolar.com
    </div>
    <table width='100%' style='padding:10px'>
      <col width='100px' >
      <col>

      <tr>
        <td style='text-align: right'>
          e-Mail:
        </td>
        <td>
          <a href='mailto:$Correo'>$Correo</a>
        </td>
      </tr>
      <tr>
        <td style='text-align: right'>
          Mensaje:
        </td>
        <td>
          $Mensaje
        </td>
      </tr>
    </table>
  </div>
 <div style='padding:15px;text-align: center; background: #f39200 ; border-radius: 0 0 20px 20px ;'>
   Mensaje automatizado por www.vincentsolar.com .
</div>
</body>


</html>
";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['recaptcha_response'])) {

    // Build POST request:
    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha_secret = '6LecWrQUAAAAAOopdIXQd-U-fqFWeha1R-jXzSFE';
    $recaptcha_response = $_POST['recaptcha_response'];

    // Make and decode POST request:
    $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
    $recaptcha = json_decode($recaptcha);

    // Take action based on the score returned:
    if ($recaptcha->score >= 0.5) {
      //Enviamos el mensaje y comprobamos el resultado
      if ( strlen($Correo) >2 && 
          wp_mail($email_to, $asunto, $contenido, $cabeceras)
        ) { 
            header("Location: /index.php?status=ok");
            die();
          }
      else{
          //Si el mensaje no se envía muestra el mensaje de error
            header("Location: /index.php?status=fail");
            die();

      }
    } else {
        header("Location: /index.php?status=fail");
        die();
    }

} 

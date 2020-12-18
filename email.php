<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require_once 'library/PHPMailer/src/Exception.php';
require_once 'library/PHPMailer/src/PHPMailer.php';
require_once 'library/PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

function exist($data){
	$result=false;
		if (isset($_POST[$data])) {
			$result=true;
	}
return $result;
}


function validation(){
	$status = true;
	@$campos = array(
	'sucursal'	=> 	$_POST['sucursal'],
	'nombre' 		=> 	$_POST['nombre'],
	'correo'		=> 	$_POST['correo'],
	'telefono'		=> 	$_POST['telefono'],
	'medidallanta'	=> 	$_POST['medidallanta'],
	'vehiculo'		=> 	$_POST['vehiculo']
	);

if (exist("submit")) {

	foreach ($campos as $item) {
		if(empty($item)){
		$status = false;
		break;
		}
	}
	
}
return $status;
}



if (validation()){

	try {

    $mail->SMTPDebug = false;                      
    $mail->isSMTP();                                           
    $mail->Host       = 'smtp.gmail.com';                    
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'brayanariel2906@gmail.com';                  
    $mail->Password   = 'contraseña'; //cambio de pass para pruebas                           
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;        
    $mail->Port       = 587;                                    

    $mail->setFrom('brayanariel2906@gmail.com', 'Ariel');
    $mail->addAddress('brayan_ariel2906@hotmail.com', 'Ariel');
    $mail->addAddress('jdiaz@solucionweb.com', 'Jonathan Diaz');   

    $mail->isHTML(true);                                  
    $mail->Subject = 'Email de formulario';
    $mail->Body    = "
    <b>Sucursal:</b> ".$_POST['sucursal']."
    <br><b>Nombre:</b> ".$_POST['nombre']."
    <br><b>Correo:</b> ".$_POST['correo']."
    <br><b>Telefono:</b> ".$_POST['telefono']."
    <br><b>Medida de llanta:</b> ".$_POST['medidallanta']."
    <br><b>Vehiculo:</b> ".$_POST['vehiculo'];

    $mail->send();
    
} catch (Exception $e) {
 
}

}

header('location: index.php');

 ?>
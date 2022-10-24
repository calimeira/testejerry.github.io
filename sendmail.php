<?php

require 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['recaptcha_response'])) {
    
    // Realizamos la petición de control: 
    define("RECAPTCHA_V3_SECRET_KEY", '6LcJoWggAAAAAKy1bG792ivVp99aZ9Ft4ph3CHTZ');
    $token = $_POST['recaptcha_response'];

    // call curl to POST request
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,"https://www.google.com/recaptcha/api/siteverify");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array('secret' => RECAPTCHA_V3_SECRET_KEY, 'response' => $token)));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
    $arrResponse = json_decode($response, true);
    
    $subject = 'Formulario de Ponzio NFT .' .date('Y/m/d');
    $to = SMTP_TO;

	$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
    $correo = isset($_POST['email']) ? $_POST['email'] : '';
	$mensaje = isset($_POST['mensaje']) ? $_POST['mensaje'] : '';
	$antispam = isset($_POST['antispam']) ? $_POST['antispam'] : '';

    
    $msg = 'Hola, '.$nombre.' envio una consulta a traves del formulario de contacto con el mail '.$correo.'<br><br>';
    $msg .= '**************************************************<br>';
    $msg .= "Nombre: ".$nombre."<br>";
    $msg .= "Email: ".$correo."<br>";
    $msg .= "Consulta: ".$mensaje."<br>";
    $msg .= '**************************************************<br>';

    $msg .= "Fecha del formulario: ".date("Y/m/d")."<br><br>";

    if ($nombre != '' && $correo != '' && $mensaje != '' && $antispam == ''){
        
        // Miramos si se considera humano o robot: 
        if($arrResponse["success"] == '1' && $arrResponse["score"] >= 0.5) {
            
            // Miramos si el token CSRF es valido
            if ($_SESSION['token'] !== $_POST['tokenCSRF']) {
                // It's SPAM
                echo 'Token CSRF no válido. Es SPAM!';
            } else {
                try {
                    
                    $response = sendEmail($to, $subject, $msg, array(), false);
                    
                    if ($response) {
                        
                        // guardar en txt
                        $data = 
                            date('Y/m/d') . ' - ' 
                            . $_POST['nombre'] . ' - ' 
                            . $_POST['email'] . ' - ' 
                            . $_POST['mensaje'] 
                            .  "\n";
                        $ret = file_put_contents('consultas.txt', $data, FILE_APPEND | LOCK_EX);

                        if($ret === false) {
                            die('hubo un error al escribir el archivo');
                        }
                        
                        header('Location: success.php');
                        die();
                    } else {
                        echo "El mensaje no pudo ser enviado.";
                    }
                    
                } catch (Exception $e) {
                    echo "El mensaje no pudo ser enviado. Mailer Error: {$mail->ErrorInfo}";
                }
            }
            
        }else{
            echo 'Estás por debajo del 60% de probabilidad de que seas humano, mejor no me fío.';
        }
        
    } else {
        echo 'Faltan completar campos. por favor, intentelo de nuevo.';
        header('Location: index.php');
        die();
    }

}

?>
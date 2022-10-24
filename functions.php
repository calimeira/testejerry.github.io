<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require dirname(__FILE__) . '/mailer/Exception.php';
require dirname(__FILE__) . '/mailer/PHPMailer.php';
require dirname(__FILE__) . '/mailer/SMTP.php';

function showLang($lang, $index){
	return isset($lang[$index]) ? utf8_encode($lang[$index]) : $index;
}

/////////////////////////////////// FRONT ////////////////////////////////////////
function getFrontLanguage(){
	$l = isset($_COOKIE["lang"]) ? $_COOKIE["lang"] : substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
	if (file_exists(LANG_PATH.$l.'.inc')){
		$path = LANG_PATH.$l.'.inc';
		define( "LANGUAGE", $l );
	}else {
		$path = LANG_PATH.'en.inc';
		define( "LANGUAGE", 'en' );
	}
	include_once $path;
	return array($lang, $l);
}

function changeObjectLanguage($obj, $lang=''){
    $lang = (empty($lang))?LANGUAGE:$lang;
	if ($lang != 'es') {
		if (is_array($obj)) {
			foreach ($obj as $sKey => $oValue) {
				$obj[$sKey] = changeObjectLanguage($oValue);
			}
		} elseif (is_object($obj)) {
			foreach ($obj as $sKey => $sValue) {
				if (preg_match('/_'.$lang.'/', $sKey)) {
					$obj->{str_replace('_'.$lang, '', $sKey)} = $sValue;
				}
			}
		}
	}

	return $obj;
}

function showLangFront($lang, $index){
	return isset($lang[$index]) ? $lang[$index] : $index;
}

function getFrontUrl($page){
	switch ($page){
            
        // INICIO
		case "inicio":
            if (LANGUAGE == 'en') { return "home"; } elseif (LANGUAGE == 'pt') { return "inicio"; }
            
        // Default
		default: return $page;
	}
}

/////////////////////////////////// MAILS ////////////////////////////////////////
function sendEmail($to, $subject, $content, $archivos = array(), $debug = false){
    try {
		$mail = new PHPMailer();
		$mail->From = SMTP_FROM_EMAIL;
		$mail->FromName = SMTP_FROM_NAME;
		$tos = explode(',', $to);
		foreach ($tos as $to) $mail->AddAddress($to);
		$mail->IsHTML(true);
		$mail->CharSet = 'UTF-8';
		$mail->Subject = $subject;
		$mail->Body = $content;
		foreach ($archivos as $nombre => $archivo){
			if (file_exists($factura)) $mail->addStringAttachment(file_get_contents($archivo),$nombre);
		}
		
		//if (SMAIL_SMTP){
			$mail->IsSMTP();
			$mail->Host = SMTP_HOST;
			$mail->Port = SMTP_PORT;
			$mail->SMTPAuth = true;
			if ($mail->SMTPAuth){
				$mail->Username = SMTP_USER;
				$mail->Password = SMTP_PASSWORD;
			}
			$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
			if ($debug) 
				$mail->SMTPDebug = 6;
			
			///DESCOMENTAR SI DA ERROR DE VERIFICAION DE SSL
			//$mail->SMTPOptions = array('ssl' => array('verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true));
		//}
		$result = $mail->send();
		return $result;
	} catch (Exception $ex) {
		print_r($ex);
        return false;
    }
}

?>

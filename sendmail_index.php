<?php

require 'tour/phpmailer/src/PHPMailer.php';
require 'tour/phpmailer/src/SMTP.php';
require 'tour/phpmailer/src/Exception.php';

$name = $_POST['Name'];
$tel = $_POST['Tel'];

$mail = new PHPMailer\PHPMailer\PHPMailer();
try{

    $mail->isSMTP();   
    $mail->CharSet = "UTF-8";
    $mail->SMTPAuth   = true;
    $mail->Debugoutput = function($str, $level) {$GLOBALS['status'][] = $str;};
    $mail->SMTPDebug = 2;
    $mail->Host = 'smtp.yandex.ru';  																	
    $mail->Username = 'ozembl.yana375@yandex.ru'; // Ваш логин от почты с которой будут отправляться письма
    $mail->Password = 'ewedjspmfurwcndy'; // Ваш пароль от почты с которой будут отправляться письма
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

    $mail->setFrom('ozembl.yana375@yandex.ru', 'Компания IreMe'); // от кого будет уходить письмо?
    $mail->addAddress('yanaozembl@gmail.com'); 
    
    $mail->isHTML(true);                                  

    $mail->Subject = 'Заявка с тестового сайта';
    $mail->Body    = "
<h2>Новое письмо</h2>
<b>Имя:</b> $name<br>
<b>Телефон:</b> $tel<br>
";

    if(!$mail->send()) {
        echo 'Error';
    } else {
        echo 'Ваша заявка принята. Хорошего отдыха!';
    }}

catch (Exception $e) {
echo "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
}
    ?>
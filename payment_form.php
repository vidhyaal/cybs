<html>
<head>
    <title>Secure Acceptance - Payment Form Example</title>
    <link rel="stylesheet" type="text/css" href="payment.css"/>
    <link rel="stylesheet" href="cart.css">
    <script type="text/javascript" src="jquery-1.7.min.js"></script>
    <link rel="stylesheet" type="text/css" href="payment.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="cart.js"></script>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
</head>
<body>
<form name="shopping" method="post" id="shopping" action="payment_confirmation.php">
             <input type="hidden" name="access_key" value="23879b2b57323605932e40d2884de6d2">
              <input type="hidden" name="profile_id" value="488DF726-70E4-4690-8627-FAF66FB44E18">
              <input type="hidden" name="transaction_uuid" value="<?php echo uniqid() ?>">
              <input type="hidden" name="signed_field_names" value="access_key,profile_id,transaction_uuid,signed_field_names,unsigned_field_names,signed_date_time,locale,transaction_type,reference_number,amount,currency">
              <input type="hidden" name="unsigned_field_names" value="bill_to_forename,bill_to_surname,bill_to_address_line1,bill_to_address_city,bill_to_address_state,bill_to_address_postal_code,bill_to_address_country,bill_to_email"/>
              <input type="hidden" name="signed_date_time" value="<?php echo gmdate("Y-m-d\TH:i:s\Z"); ?>">
              <input type="hidden" name="locale" value="en">
              <input type="hidden" name="transaction_type" value="sale" size="25">
            <input type="hidden" name="reference_number" value="cptsale123" size="25">
            <input type="hidden" name="amount" id="amt" size="25" name='amt' value=''>
            <input type="hidden" name="currency" size="25" value="USD">
            <input type="hidden" name="bill_to_forename" value="V">
            <input type="hidden" name="bill_to_surname" value='AL'/>
           <input type="hidden" name="bill_to_address_line1" value="2211"/>
           <input type="hidden" name="bill_to_address_state" value="CL"/>
          <input type="hidden" name="bill_to_address_city" value="Chennai"/> 
            <input type="hidden" name="bill_to_address_country" value="IN"/> 
          <input type="hidden" name="bill_to_email" value="test@test.test"/> 
        <input type="hidden" name="bill_to_address_postal_code" value="600073"/>
</form>
<script>
	window.onload=function(){
		var qString = location.search;
  if (qString.indexOf('amt') != -1) {
     var data = qString.substring(qString.indexOf('=') + 1, qString.length);
     document.forms[0].amt.value = data;
    }
		document.shopping.submit();
	}	
</script>

</body>
</html>

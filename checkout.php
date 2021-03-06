<?php
?>
<!DOCTYPE HTML>
<HTML>
   <head>
      <title>Simple JS Cart</title>
      <!-- (A) CSS + JS -->
      <link rel="stylesheet" href="cart.css">
      <script src="products.js"></script>
      <script src="cart.js"></script>
    
   </head>
   <body>
    <div id="cart-wrap">
      <!-- (B) PRODUCTS LIST -->
      <div id="cart-products"></div>

      <!-- (C) CURRENT CART -->
      <div id="cart-items"></div>
    </div>
    <form id="shopping" action="unsigneddatafields.php" method="post">
<input type="hidden" name="access_key" value="1d3e1a35602e3e149d06de9c1a76bbe8">
    <input type="hidden" name="profile_id" value="0003C773-CA4D-47A7-B98D-47C1526006EB">
    <input type="hidden" name="transaction_uuid" value="<?php echo uniqid() ?>">
    <input type="hidden" name="signed_field_names" value="access_key,profile_id,transaction_uuid,signed_field_names,unsigned_field_names,signed_date_time,locale,transaction_type,reference_number,amount,currency,payment_method,bill_to_forename,bill_to_surname,bill_to_email,bill_to_phone,bill_to_address_line1,bill_to_address_city,bill_to_address_state,bill_to_address_country,bill_to_address_postal_code">
    <input type="hidden" name="unsigned_field_names" value="card_type,card_number,card_expiry_date">
    <input type="hidden" name="signed_date_time" value="<?php echo gmdate("Y-m-d\TH:i:s\Z"); ?>">
    <input type="hidden" name="locale" value="en">
            <input type="hidden" name="transaction_type" value="sale" size="25">
            <input type="hidden" name="reference_number" value="cptsale123" size="25">
            <input type="hidden" name="amount" id="amt" size="25" name='amt' value="">
            <input type="hidden" name="currency" size="25" value="USD">
            <input type="hidden" name="bill_to_forename" value="V"/>
            <input type="hidden" name="bill_to_surname" value='AL'/>
           <input type="hidden" name="bill_to_address_line1" value="2211"/>
           <input type="hidden" name="bill_to_address_state" value="CL"/>
          <input type="hidden" name="bill_to_address_city" value="Chennai"/> 
          <input type="hidden" name="bill_to_phone" value="4083915486"/> 
            <input type="hidden" name="bill_to_address_country" value="IN"/> 
          <input type="hidden" name="bill_to_email" value="test@test.test"/> 
        <input type="hidden" name="bill_to_address_postal_code" value="600073"/>
        <input type="hidden" name="payment_method" value="authorization">
        <input type="submit" id="submit" name="submit" value="Submit" style="display:none;"/>

        </form>
 <!--  <fieldset>
        <span>card_type:</span><input type="text" name="card_type"><br/>
        <span>card_number:</span><input type="text" name="card_number"><br/>
        <span>card_expiry_date:</span><input type="text" name="card_expiry_date"><br/>
	
    </fieldset>
  <input type="submit" id="submit" value="Confirm "/>
  </div>
  </form>-->

  <script type="text/javascript" src="jquery-1.7.min.js"></script>
    <script type="text/javascript" src="payment_form.js"></script> 
    <script>
        window.onload=function(){
		var qString = location.search;
  if (qString.indexOf('amt') != -1) {
     var data = qString.substring(qString.indexOf('=') + 1, qString.length);
     document.forms[0].amt.value = data;
    }
//document.getElementById('submit').click();
	}	
    </script>
 
  </body>
  
</HTML>
<?php
?>
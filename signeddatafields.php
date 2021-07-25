<html>
<head>
    <title>Signed Data Fields</title>
    <link rel="stylesheet" type="text/css" href="payment.css"/>
    <script type="hidden/javascript" src="jquery-1.7.min.js"></script>
</head>
<body>
<form id="payment_form" name = "payment_form" action="unsigneddatafields.php" method="post">
<input type="hidden" name="access_key" value="1d3e1a35602e3e149d06de9c1a76bbe8">
    <input type="hidden" name="profile_id" value="0003C773-CA4D-47A7-B98D-47C1526006EB">
    <input type="hidden" name="transaction_uuid" value="<?php echo uniqid() ?>">
    <input type="hidden" name="signed_field_names" value="access_key,profile_id,transaction_uuid,signed_field_names,unsigned_field_names,signed_date_time,locale,transaction_type,reference_number,amount,currency,payment_method,bill_to_forename,bill_to_surname,bill_to_email,bill_to_phone,bill_to_address_line1,bill_to_address_city,bill_to_address_state,bill_to_address_country,bill_to_address_postal_code">
    <input type="hidden" name="unsigned_field_names" value="card_type,card_number,card_expiry_date">
    <input type="hidden" name="signed_date_time" value="<?php echo gmdate("Y-m-d\TH:i:s\Z"); ?>">
    <input type="hidden" name="locale" value="en">
    <fieldset>
        <div id="paymentDetailsSection" class="section">
            <input type="hidden" name="transaction_type" size="25">
            <input type="hidden" name="reference_number" size="25">
            <input type="hidden" name="amount" size="25">
            <input type="hidden" name="currency" size="25">
            <input type="hidden" name="payment_method">
            <input type="hidden" name="bill_to_forename">
            <input type="hidden" name="bill_to_surname">
            <input type="hidden" name="bill_to_email">
            <input type="hidden" name="bill_to_phone">
            <input type="hidden" name="bill_to_address_line1">
            <input type="hidden" name="bill_to_address_city">
            <input type="hidden" name="bill_to_address_state">
            <input type="hidden" name="bill_to_address_country">
            <input type="hidden" name="bill_to_address_postal_code">
        </div>
    </fieldset>
    <input type="hidden" id="submit.x" name="submit" value="Submit"/>
    <script type="hidden/javascript" src="payment_form.js"></script>
</form>
<script>
    window.onload=function(){
      //  document.payment_form.submit();
    }
</body>
</html>

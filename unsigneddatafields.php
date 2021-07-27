


<?php include 'security.php' ?>

<html>
<head>
    <title>Unsigned Data Fields</title>
    <link rel="stylesheet" type="text/css" href="payment.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="cart.js"></script>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
      <style>
          .padding {
            margin-left: 177px;
            margin-right: 167px;
            margin-top: 10px;
}

.card {
    margin-bottom: 1.5rem
}
	      label {float:left;}
.card {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid #c8ced3;
    border-radius: .25rem
}

.card-header:first-child {
    border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0
}

.card-header {
    padding: .75rem 1.25rem;
    margin-bottom: 0;
    background-color: #090249;
    border-bottom: 1px solid #c8ced3;
    color:#ffffff;
}

.card-body {
    flex: 1 1 auto;
    padding: 1.25rem
}

.form-control:focus {
    color: #5c6873;
    background-color: #fff;
    border-color: #c8ced3 !important;
    outline: 0;
    box-shadow: 0 0 0 #F44336
}
.card-footer{
    padding:0 10px 10px 15px;
}

.payBtn {
    font-weight:bold;
    font-size:1em;
    padding: 10px;
    border: none;
    color:#fff;
    background:#090249;
    cursor:pointer;
}
</style>
</head>
<body>
<form id="payment_confirmation" action="https://testsecureacceptance.cybersource.com/silent/embedded/pay" method="post">
<?php
    foreach($_REQUEST as $name => $value) {
        $params[$name] = $value;
    }
   
?>  
<fieldset id="confirmation">
  <div>
        <?php
           /*   */
        ?>
    </div>
</fieldset>
    <?php
      
       foreach($params as $name => $value) {
           echo "<input type=\"hidden\" id=\"" . $name . "\" name=\"" . $name . "\" value=\"" . $value . "\"/>\n";
       }
       echo "<input type=\"hidden\" id=\"signature\" name=\"signature\" value=\"" . sign($params) . "\"/>\n";
   ?>
    
  <div id="UnsignedDataSection" class="section" >
  <div class="padding">
    <div class="row">
        <div class="col-sm-8">
            <div class="card">
                <div class="card-header">
                    <strong>Credit Card Details</strong>
                   
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="name">Card Type</label>
                                <input class="form-control" id="name" type="text" placeholder="Visa" name="card_type" value='Visa'>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="ccnumber">Credit Card Number</label>
                                
                                <input type="text" class="form-control" placeholder="0000 0000 0000 0000" name="card_number" value='4242424242424242'>
                        
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="cvv">Expiry date</label>
                                <input class="form-control" id="card_expiry_date" type="text" name="card_expiry_date" placeholder="12/23" value='12/23'>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <input type="submit" class="payBtn float-right" type="submit" value='Pay Now'>
                        <!--i class="mdi mdi-gamepad-circle"></i> Continue</button-->
                </div>
            </div>
        </div>
    </div>
</div>

   <!--  <fieldset>
        <legend>Unsigned Data Fields</legend>  
        Card data fields are posted directly to CyberSource, together with the fields above.  These field <br>
        names will need to be included in the unsigned_field_names.
        <BR></BR>
        <div id="UnsignedDataSection" class="section">
        <span>card_type:</span><input type="text" name="card_type"><br/>
        <span>card_number:</span><input type="text" name="card_number"><br/>
        <span>card_expiry_date:</span><input type="text" name="card_expiry_date"><br/>
	</div>
    </fieldset>
  <input type="submit" id="submit" value="Confirm "/> -->
  <script type="text/javascript" src="jquery-1.7.min.js"></script>
  <script type="text/javascript" src="payment_form.js"></script>

</form>
</body>
</html>

<?php

include 'security.php'

?>

<html>
<head>
    <title>Secure Acceptance - Payment Form Example</title>
    <link rel="stylesheet" type="text/css" href="payment.css"/>
    <link rel="stylesheet" type="text/css" href="payment.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<form id="payment_confirmation"  name="payment_confirmation"  method="post">
<?php
    foreach($_REQUEST as $name => $value) {
        $params[$name] = $value;
    }
?>
<fieldset id="confirmation">
   
    <div>
        <?php
            foreach($params as $name => $value) {
                 "<div>";
                 "<span class=\"fieldName\">" . $name . "</span><span class=\"fieldValue\">" . $value . "</span>";
                 "</div>\n";
            }
        ?>
    </div>
</fieldset>
    <?php
        foreach($params as $name => $value) {
       echo  "<input type=\"hidden\" id=\"" . $name . "\" name=\"" . $name . "\" value=\"" . $value . "\"/>\n";
        }
      echo   "<input type=\"hidden\" id=\"signature\" name=\"signature\" value=\"" . sign($params) . "\"/>\n";
    ?>
<input type="submit" id="submit.x" value="Confirm" style='visibility:hidden'/>
</form>
<script>




    window.onload=function(){

    var ele=  document.payment_confirmation.pgType;
    alert(ele.value)

    if (ele.value=='i'){
      
      document.payment_confirmation.action = "https://testsecureacceptance.cybersource.com/embedded/pay";
    }
    else{
    
        document.payment_confirmation.action = "https://testsecureacceptance.cybersource.com/pay";
    }

       document.payment_confirmation.submit();
    }
    </script>
</body>
</html>

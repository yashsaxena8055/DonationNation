<?php
 //session variable
 session_start();
$_SESSION["email"]=$_POST["email"];
$_SESSION["mobile"]=$_POST["mobile"];
$_SESSION["name"]=$_POST["name"];
$_SESSION["address"]=$_POST["address"];
$_SESSION["amount"]=$_POST["amount"];

//session ends


$key ="rzp_test_c0R30QobIV62bG";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
if($_POST["name"]&&$_POST["email"]&&$_POST["mobile"]&&$_POST["address"]&&$_POST["amount"])
{
   $name=       $_POST["name"];
   $email=$_POST["email"];
   $mobile=$_POST["mobile"];
   $address=$_POST["address"];
   $amount=  $_POST["amount"];
    $amount =$amount*100;
    
   
}
else{

   echo '<script>
     alert("Some Fields Are Empty!");
   </script>';
   
}
}


?>



<style>
.razorpay-payment-button
    {
        display: none;
    }

</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
       
         $(".razorpay-payment-button").click();
        
    });

   

</script>

<form action="confirmation.php" method="POST">
    
<script
        
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="rzp_test_c0R30QobIV62bG" // Enter the Test API Key ID generated from Dashboard → Settings → API Keys
    data-amount="<?php echo $amount;?>" // Amount is in currency subunits. Hence, 29935 refers to 29935 paise or ₹299.35.
    data-currency="INR"// You can accept international payments by changing the currency code. Contact our Support Team to enable International for your account
    data-id="OIDRh9ti2lP7"
    data-buttontext="Pay with Razorpay"
    data-name="Donation Nation"
    data-description="Charity is the life of kindness"
    data-image=""
    data-prefill.name="<?php echo $name; ?>"
    data-prefill.email="<?php echo $email; ?>"
    
    data-theme.color="#F37254"
></script>
<input type="hidden" custom="Hidden Element" name="hidden">
</form>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
           <link rel="icon" type="image/icon type" href="images/icon.PNG">
        <link rel="stylesheet" href="css/style.css"/>
           <title>Payment Page</title>
    </head>
    
    <body>
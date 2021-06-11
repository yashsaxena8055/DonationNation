<?php



$key ="rzp_test_1vYf8Z6KuwxoPR";
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

 
<!DOCTYPE html>
<html lang="en">
   <head>
     
       <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="stylesheet" href="css/donation-style.css">
             <link rel="stylesheet" href="css/style.css"> 
             <link rel="stylesheet" media="screen and (max-width:560px)" href="css/donationResponsive.css">
        <link rel="icon" type="image/icon type" href="images/icon.PNG">
       <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
       
      <title>Donation Page</title>
     
   </head>
   <body>
<!--     <div class="alert" id="alert" style="color:red;background-color:#f8d7da;display:none;">this is alert</div>-->
         <nav class="navbar  ">
        <div class="logo"><img src="images/logo.png" alt="Logo"></div>
        <ul>
            <li class="list-item"><a href="iindex.php">HOME</a></li>
            <li class="list-item"><a href="iindex.php#about">ABOUT</a></li>
            <li class="list-item"><a href="#">DONATION</a></li>
            <li class="list-item"><a href="iindex.php#contact">CONTACT US</a></li>
        </ul>
        </nav>
       
       <section class="container" >
          
<!--       <form><script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_HJ5kRENhDuDysc" async> </script> </form>-->
              <form class="donation-form" action="payscript.php" method="post" >
                 <div class="form-div">
                      <label class="label" for="name"> <i class="material-icons">person</i>&ensp; Name</label>
                     <input type="text" name="name" placeholder="Enter Your Name" id="name"  />
                  </div>
                  
                   <div class="form-div">
                      <label for="email"> <i class="material-icons">email</i>&ensp; Email</label>
                     <input type="email" name="email" placeholder="Enter Your Email" id="email"  />
                  </div>
                  
                   <div class="form-div">
                      <label for="mobile"><i class="material-icons">phone</i>&ensp; Phone Number </label>
                     <input type="text" name="mobile" placeholder="Enter Your Mobile" id="mobile"  />
                  </div >
                  
                   <div class="form-div">
                      <label for="address"> <i class="material-icons">home    </i> &ensp;Address </label>
                     <input type="text" name="address" placeholder="Enter Your Address" id="address"  />
                  </div >
                  
                   <div class="form-div">
                       <label for="amount"> <i class="material-icons">payments</i>&ensp;Amount </label>
                     <input type="number" name="amount" placeholder="Enter The Amount You Want To Donate(INR)" id="amount"  />
                  </div>
                  <span style="color: darkgrey;font-size:smaller;">We'll never share your personal details with anyone else.</span>
                  <input type="submit" id="rzp-button1" class="button" name="submit" placeholder="Submit"/>
              </form>
       
       
       </section>
      
      <footer class=" text-footer">
        &copy; 2022 - Donation Nation - All Rights Reserved
    </footer>  
    
       
        
       
   </body>
</html>


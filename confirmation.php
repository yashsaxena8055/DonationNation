<?php
session_start();
$name=$_SESSION["name"];
$email=$_SESSION["email"];
$mobile=$_SESSION["mobile"];
$address=$_SESSION["address"];
$amount=$_SESSION["amount"];
$random = rand(1111,5555);
date_default_timezone_set('Asia/Kolkata');
$date = date( 'd-m-Y ', time () );

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
         <link rel="stylesheet" href="css/confirmation.css">
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
         <link rel="stylesheet" media="screen and (max-width:1100px)" href="css/confirmationResposive.css">
         
        <link rel="icon" type="image/icon type" href="images/icon.PNG">
        <title>Confirmation</title>
    </head>
    <body>
     <nav class="navba  " style="">
        <div class="logo"><img src="images/logo.png" alt="Logo"></div>
        <ul>
            <li class="list-item"><a href="#home">HOME</a></li>
            <li class="list-item"><a href="#about">ABOUT</a></li>
            <li class="list-item"><a href="donation.php">DONATION</a></li>
            <li class="list-item"><a href="#contact">CONTACT US</a></li>
            
        </ul>
    </nav>
      


       
        
        <div class="alert alert-success" role="alert" style="text-align:center;font-family:arial;font-size:18px; ">
        Your Payment Has Successful! Thankyou For Your Contribution.
        </div>
        <div class="text-right mb-3"><button class="btn btn-primary btn-sm mr-5" onclick="myprint()" type="button">Print Receipt </button></div>      
         <div  style="font-family:arial;" id="container-print" class="container mt-5">
     
    <div class="d-flex justify-content-center row">
        <div class="col-md-8">
            <div class="p-3 bg-white rounded">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="">Payment Receipt</h1>
                        <div class="billed"><span class="font-weight-bold ">Billed:</span><span style="text-transform: capitalize;" class="ml-1 "><?php echo $name;?></span></div>
                        <div class="billed"><span class="font-weight-bold ">Date:</span><span class="ml-1"><?php echo $date;?></span></div>
                        <div class="billed"><span class="font-weight-bold ">Recepit:</span><span class="ml-1">#<?php echo $random;?></span></div>
                        <div class="billed"><span class="font-weight-bold ">Email:</span><span class="ml-1"><?php echo $email;?></span></div>
                        <div class="billed"><span class="font-weight-bold ">Phone Number:</span><span class="ml-1">+91<?php echo $mobile;?></span></div>
                        <div class="billed"><span class="font-weight-bold ">Address:</span><span  style="text-transform: capitalize; class="ml-1"><?php echo $address;?></span></div>
                    </div>
                    <div class="col-md-6 text-right mt-3">
                        <!-- <h4 class="text-danger mb-0">Rae jones</h4><span>bbbootstrap.com</span> -->
                        <img src="images/razorpay.png" alt="Razorpay">
                    </div>
                </div>
                <div class="mt-3">
                    <div class="table-responsive">
                        <table class="table"  style="font-family:arial;">
                            <thead>
                                <tr>
                                    <th>Description</th>
                                    <th>Unit Price</th>
                                    <th>Qty</th>
                                    <th>Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Donate Amount<br>Fund is Aimed at strengthening the fight<br> against the COVID 19.</td>
                                    <td>&#8377;<?php echo $amount?></td>
                                    <td>1</td>
                                    <td>&#8377;<?php echo $amount?></td>
                                </tr>
                               
                                <tr>
                                    <td style="    border-bottom-width: 0px;border-top-width:0px"></td>
                                    <td style="    border-bottom-width: 0px;border-top-width:0px"></td>
                                    <td style="    border-bottom-width: 0px;border-top-width:0px"><b>Total</b></td>
                                    <td style="    border-bottom-width: 0px;border-top-width:0px"><b>&#8377;<?php echo $amount?></b></td>
                                </tr>
                                 <tr>
                                    <td style="    border-bottom-width: 0px; border-top-width:0px"></td>
                                    <td style="    border-bottom-width: 0px; border-top-width:0px"></td>
                                    <td style="    border-bottom-width: 0px; border-top-width:0px;color:#65d47f;">Amount Paid</td>
                                    <td style="    border-bottom-width: 0px; border-top-width:0px;color:#65d47f;">&#8377;<?php echo $amount?></td>
                                </tr>
                            </tbody>
                        </table>
                        <div><img src="images/logo.png"  style="display: block;width: 148px;"alt="Company Logo"></div>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
   


</div>

         <footer class=" text-footer">
        &copy; 2022 - Donation Nation - All Rights Reserved
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>  
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
   <script type="text/javascript">
      function myprint()
      {
           var printing =  document.getElementById("container-print").innerHTML;
           document.body.innerHTML = printing;
           window.print();
      }
   
   </script>
</body>
</html>
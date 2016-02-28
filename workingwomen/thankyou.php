<?php $pagename="Thank You - Working Women";?>

<?php include("includes/head.php"); ?>

<div class="contentwrap">

	<div class="wrapper">

        <div id="thankyou">

    		<?php

            $to=$_POST["email"];
            $subject='Thank you for you donation!';
            $message="Thank you " . $_POST["firstname"] . " for donating!" . "\r\n" . "\r\n";
            $message.="Here is your receipt, please contact us if there are any issues." . "\r\n" . "\r\n";
            $message.=$_POST["firstname"] . " " . $_POST["lastname"] . "\r\n";
            $message.=$_POST["address"] . "\r\n";
            $message.=$_POST["city"] . ", " . $_POST["province"] . "\r\n";
            $message.=$_POST["postal"] . "\r\n";
            $message.="Phone: " . $_POST["phone"] . "\r\n";
            $message.="Cell: " . $_POST["cell"] . "\r\n" . "\r\n";
            $message.=$_POST["email"] . "\r\n" . "\r\n";
            $message.="Donation: $" . $_POST["amount"] . " / " . $_POST["group1"] . "\r\n";
            $message.="To " . $_POST["direct"] . "\r\n" . "\r\n";
            $message.=$_POST["group3"] . " " . $_POST["creditcardnum"] . "\r\n";
            $message.=$_POST["expireday"] . "/" . $_POST["expiremonth"] . "\r\n" . "\r\n";
            $message.="Thank you again," . "\r\n";
            $message.="Working Women Staff";


            $from="workingwomen@fakemail.com";

            mail($to,$subject,$from,$message);

           ?>

    	  <h5>Thank you, <?php echo $_POST["firstname"];?>!</h5>
    	  <h5>Your donation of $<?php echo $_POST["amount"];?> has been received.</h5>
    	  <h5>You will receive a confirmation email at <?php echo $_POST["email"];?> shortly.</h5>
    	   
       </div>

    </div>

</div>

<?php include("includes/footer.php"); ?>
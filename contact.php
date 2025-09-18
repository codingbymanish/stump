<?php
$to =  "info@stump.co.in";
$subject = " Enquire from Website :";
 // $ form= $_REQUEST("email");
 $message = "Name :    ".$_REQUEST["name"]." 
Email :    ".$_REQUEST["email"]."  
Phone Number :    ".$_REQUEST["number"]."  
Subject :    ".$_REQUEST["subject"]."
Message :    ".$_REQUEST["message"]."


";
$from = "stump.co.in";

$headers = "From: $from";

if (@mail($to, $subject, $message, $headers))
	  {
         ?>
         <script language="javascript" type="text/javascript">
		alert('Thank you for enquiry. We will contact you shortly.');
		window.location = 'index.html';
	</script>
         <?php
	  }else
	  {
         ?>
         <script language="javascript" type="text/javascript">
		alert('Message failed.');
		window.location = 'index.html';
	</script>
         <?php
	  }
?>
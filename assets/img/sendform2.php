<?
        $Contact_Name = addslashes($_POST["Contact_Name"]);
        $Contact_Email = addslashes($_POST["Contact_Email"]);
		$Contact_Subject = addslashes($_POST["Contact_Subject"]);
        $Contact_Message = addslashes($_POST["Contact_Message"]);

        $to = "kamren@kamrendesigns.com";
        $from = $Contact_Email;

        $subject = "Website Contact Form";

        $message .= "Contact_Name : ".$Contact_Name."\n";
        $message .= "Contact_Email : ".$Contact_Email."\n";
		$message .= "Contact_Subject : ".$Contact_Subject."\n";
        $message .= "Contact_Message :  \n ".$Contact_Message."\n";

				$headers = "MIME-Version: 1.0" . "\r\n";
				$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
				$headers .= "From: $from" . "\r\n";

        mail($to,$subject,$message,$headers); 

       echo '
       <script language="javascript" type="text/javascript">
       <!--
            window.location.replace("thankyou.html");
       -->
       </script> ';   

?>
<?
    if ((isset($_POST["Reset Form"])) && ($_POST["Submit Form"] == "Reset Form"))
    {

        $Contact_Name       = "";
        $Contact_Email      = "";
        $Contact_Message    = "";
    }
?>


<?
$name  = $_REQUEST["name"];
$phone   = $_REQUEST["phone"];
$date = $_REQUEST["date"];
$treatment = $_REQUEST["treatment"];
$to    = "jthemesonline@gmail.com";
if (isset($email) && isset($name) && isset($phone)) {
    $email_subject = "$name sent you a message via Spa Magic (Hero Form)";
        $headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
$headers .= "From: ".$name." <".$email.">\r\n"."Reply-To: ".$email."\r\n" ;
$msg     = "From: $name<br/> Phone: $phone <br/> Appointment Date: $date <br/> Treatment: $treatment";
    
   $mail =  mail($to, $email_subject, $msg, $headers);
  if($mail)
    {
        echo 'success';
    }

else
    {
        echo 'failed';
    }
}

?>
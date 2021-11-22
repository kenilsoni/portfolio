
<?php
// error_reporting(0);

require "vendor/autoload.php";
 $name=$_POST["name"];
 $emaill=trim($_POST["email"]);
 $sub=$_POST["subject"];
 $msg=$_POST["message"];
 $email = new \SendGrid\Mail\Mail();
 $email->setFrom("comicbykenil@gmail.com");
 $email->setSubject($sub);
 $email->addTo("kenil9446@gmail.com");
 $email->addContent("text/html","<div>".$name."<br>".$emaill."<br>".$msg."</div>");

 $sendgrid = new \SendGrid("hide due to security purpose");
 


 if($sendgrid->send($email))
 {
     
     
     echo '<script>alert("Mail Sent Successfully");
     window.location.replace("http://localhost/tatva/");</script>';


    
}
 else{ echo '<script>alert("Something Went Wrong")</script>';}

?>

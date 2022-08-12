<?php
 mail("kenechukwucoach@gmail.com", "hello", "greeting message");

 $to = "kenechukwucoach@gmail.com";
 $subject = "job inquiry";

 $message = "<b>This is the HTML message</b>";
 $message .= "<h1Tthis the headline</h1>";

 $header = "From:nwobodokenechukwu2@gmail.com \r\n";
 $header .= "Cc:test02@gmail.com \r\n";
 $header .= "MIME-Vrsion: 1.0 \r\n";
 $header .= "Content-type: text/html \r\n";

 $retval = mail ($to, $subject, $message, $header);

 if($retval == true){
    echo "Message sent successfully...";
 } else {
    echo "Message not sent...";
 }

?>
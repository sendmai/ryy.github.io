<?php
         $to = "idlikerz@gmail.com";
         $subject = "This is subject";
         
         $message = "<b>This is HTML message.</b>";
         $message = "<h1>This is headline.</h1>";
         
         $header = "From: Securitygoogle@gl.com \r\n";
         $header = "Cc:secgl@gl.com \r\n";
         $header = "MIME-Version: 1.0\r\n";
         $header = "Content-type: text/html\r\n";
         
         $retval = mail($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
      ?>

<?php
 
    $to = "tracey@hallhealth.net"; 
    $from = $_REQUEST['email']; 
    $name = $_REQUEST['name']; 
    $get_subject = $_REQUEST['subject']; 
    $headers = "From: $from"; 
    $subject = "Subject: $get_subject"; 
 
    $fields = array(); 
    $fields{"name"} = "name"; 
    $fields{"email"} = "email"; 
    $fields{"message"} = "message";
 
    $body = "Here is what was sent:\n\n"; foreach($fields as $a => $b){   $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }
 
    $send = mail($to, $subject, $body, $headers);
 
?>
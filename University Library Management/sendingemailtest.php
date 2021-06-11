<?php
$row="aaaaa";
$message="You must return.$row.written by,$row.before.$row";
$message=wordwrap($message,100);
echo $message;

/*mail("your@email.address", "Here is the subject line",

$_POST["insert your message here"]. "From: an@email.address");

}

?>*/
if($_POST["message"]) {
    $to = "mm@example.com";
    $subject = "My subject";
    $txt = "Hello world!";
    

    mail($to,$subject,$txt);
}
?>
<?php
if ($_POST["email"]<>'') {
    $ToEmail = 'bspan19@gmail.com';
    $EmailSubject = 'BestMarketingNames.com Inquiry';
    $mailheader = "From: ".$_POST["email"]."\r\n";
    $mailheader .= "Reply-To: ".$_POST["email"]."\r\n";
    $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n";
    $MESSAGE_BODY = "fullame: ".$_POST["fullname"]."\n";
    $MESSAGE_BODY .= "Email: ".$_POST["email"]."\n";
    $MESSAGE_BODY .= "Phone Number: ".nl2br($_POST["phone"])."\n";
           $MESSAGE_BODY .= "BestTime: ".$_POST["besttime"]."\n";
           $MESSAGE_BODY .= "PriceToStayUnder: ".$_POST["price"]."\n";
           $MESSAGE_BODY .= "Comments: ".nl2br($_POST["comment"])."\n";
    mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure");
?><style type="text/css">
#email {
          margin: 1px;
}
#name {
}
</style>
Thank you for your inquiry. A company representative will contact you within the next 72 hours!
<?php
} else {
?>
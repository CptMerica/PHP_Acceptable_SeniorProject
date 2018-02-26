<?php
$to = 'fowlerg23@gmail.com';
$subject = "There is a visitor waiting for you in the lobby!";

$htmlContent = '
    <html>
    <head>
        <title> New visitor notification</title>
    </head>
    <body>
        <h3> Mon-Valley Center Training group, </h3>
        <h3> There is a new visitor in the waiting room.Below is their information. </h3>
       <h3>vPlease assist them as soon as possible. Thank you!</h3>
        <table cellspacing="0" style="border: 2px dashed #FB4314; width: 300px; height: 200px;">
            <tr>
                <th>Name:</th>
                <td>Visitor Name</td>
            </tr>
            <tr style="background-color: #e0e0e0;">
                <th>Type of visitor </th>
                <td> New</td>
            </tr>
            <tr>
                <th>Reason for visit: </th>
                <td> Vistor reason for visit</td>
            </tr>
        </table>
    </body>
</html>';

// Set content-type header for sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// Additional headers
$headers .= 'From: CodexWorld<sender@example.com>' . "\r\n";
$headers .= 'Cc: ' . "\r\n";
$headers .= 'Bcc: ' . "\r\n";

// Send email
if(mail($to,$subject,$htmlContent,$headers)):
    $successMsg = 'Email has sent successfully.';
else:
    $errorMsg = 'Email sending fail.';
endif;
?>
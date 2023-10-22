<?php
/*##########Script Information#########
  # Purpose: Send mail Using PHPMailer#
  #          & Gmail SMTP Server 	  #
  # Created: 24-11-2019 			  #
  #	Author : Hafiz Haider			  #
  # Version: 1.0					  #
  # Website: www.BroExperts.com 	  #
  #####################################*/

//Include required PHPMailer files
	require 'includes/PHPMailer.php';
	require 'includes/SMTP.php';
	require 'includes/Exception.php';
//Define name spaces
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;
//Create instance of PHPMailer
	$mail = new PHPMailer();
//Set mailer to use smtp
	$mail->isSMTP();
//Define smtp host
	$mail->Host = "smtp-relay.sendinblue.com";
//Enable smtp authentication
	$mail->SMTPAuth = true;
//Set smtp encryption type (ssl/tls)
	$mail->SMTPSecure = "tls";
//Port to connect smtp
	$mail->Port = "587";
//Set gmail username
	$mail->Username = "rasv326@gmail.com";
//Set gmail password
	$mail->Password = "5wODVsxq1P9I6S0Q";
//Email subject
	$mail->Subject = "Reg: Security Update";
//Set sender email
	$mail->setFrom("noreply-netid8@amazon.com", "SSP");
//Enable HTML
	$mail->isHTML(true);
//Attachment
	$mail->addAttachment('img/image.jpg');
//Email body
	$mail->Body = "<p>Dear User,</p>

    <p>Thank you for accessing SSP Portal, This mail is regarding security concerns change your password!!!</p>
<p> <h2> Security Check </h2> </p>
    <br>Regards,</br>
    <br>SSP Admin<br>
    <br>Information Technology and Knowledge Management</br>
    Landline No.: 044-2741 7320 | Extn: 7320/7330</br>
    Room No 20, 4th Floor, University Building (Central Library), SRM Institute of Science and Technology | <a href='http://www.srmist.edu.in'>www.srmist.edu.in</a><br>
    Kattankulathur, Chennai, 603203.</p>";
//Add recipient
	$mail->addAddress("");
	// Add BCC recipients
$mail->addBCC("shathishvadivel@gmail.com");
//Finally send email
	if ( $mail->send() ) {
		echo "Email Sent..!";
	
	}
//Closing smtp connection
	$mail->smtpClose();

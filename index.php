<?php
error_reporting(0);

?>

<html>
<!DOCTYPE html>
<head>
<link rel="stylesheet" href="css/style.css">
<!--<link rel="stylesheet" href="font-awesome.min.css">-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!--<link rel="stylesheet" href="bootstrap.min.css">-->
<script src="js/index.js"></script>
<script src="js/require.js"></script>
<script src="js/mailer.js"></script>
<title>Idris Lawal</title>
</head>

<body>
<div class="container">
<center><h1 style="color: #636363" id="headstyle">IDRIS LAWAL PORTFOLIO</h1></center>
<hr>
<img src="images/avatar.png" class="img-style">
<h2 style="color: #636363"> Description</h2>
<p>Idris Lawal is a Tech Enthusiast who has acquired skills in computer networking, computer hardware engineering and Web development.</p>
<a href="docs/idris-lawal-cv.pdf" download><button class="btn">Download My CV</button></a>
<hr>
<h2 style="color: #636363"> Contacts</h2>
<ul>
    <table>
    <tr><td><li class="fa fa-github"><b>&nbsp: </b></td><td><a href="https://github.com/IDTitanium" target="_blank">github.com/IDTitanium</a></li></td></tr>
    
    <tr><td><li class="fa fa-linkedin"><b>&nbsp: </b></td><td><a href="https://linkedin.com/in/lawal-idris-oluwaseun" target="_blank">linkedin.com/in/lawal-idris-oluwaseun</a></li></td></tr>
    <tr><td><li class="fa fa-twitter"><b>&nbsp: </b></td><td><a href="https://twitter.com/oluwaseunmi" target="_blank">twitter.com/oluwaseunmi</a></li></td></tr>
    <tr><td><li class="fa fa-envelope"><b>&nbsp: </b></td><td><a href="mailto:idriseun222@gmail.com">idriseun222@gmail.com</a></li></td></tr>
    
    </table>
    
    </ul>
    <a href="#name">Click Here to use the Contact Form</a>


<hr>
<h2 style="color: #636363"> Technologies Used</h2>
<p>Networking - Cisco IOS, DNS service, IP addressing and Subnetting</p>
<p>Web Development - HTML5, CSS 3, Boostrap, PHP, MySQL.</p>
<hr>
<h2 style="color: #636363">Projects</h2>
<h3 style="color: #636363">Hello Assur Web Platform</h3>
<ul>
<li>A web platform for the launch of a new digital health plan that enabled subscribers to buy the plan and book appointment with a doctor online. This was fully achieved by integrating the API of a payment platform and PHP and MySQL to handle the backend. HTML, CSS, Bootstrap 3 and JavaScript were used for the frontend. </li>
<p></p><a href="projects.html"><button class="btn">Read More</button></a></p>
</ul>
<hr>
<h2 style="color: #636363">Contact Form</h2>
<form id="contactForm" action="" method="POST">
    <input type="text" id="name" class="form-control" placeholder="Your Name Here" name="name">
<input type="text" id="email" class="form-control" placeholder="Your Email Here" name="email" required>
<input type="text" id="subject" class="form-control" placeholder="Subject" name="subject" required>
<textarea type="text" id="msg" placeholder="Your Message Here" name="msg" required></textarea>
<input type="submit" class="btn" value="Send Message to Idris" name="submit">
</form>


<div id="background-wrap">
    <div class="bubble x1"></div>
    <div class="bubble x2"></div>
    <div class="bubble x3"></div>
    <div class="bubble x4"></div>
    <div class="bubble x5"></div>
    <div class="bubble x6"></div>
    <div class="bubble x7"></div>
    <div class="bubble x8"></div>
    <div class="bubble x9"></div>
    <div class="bubble x10"></div>
    <div class="bubble x5"></div>
    <div class="bubble x6"></div>
    <div class="bubble x7"></div>
    <div class="bubble x8"></div>
</div>
</body>

</html>
<?php
require_once('phpmailer/PHPMailerAutoload.php');

//PHP mailer details

function safe($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlentities($data);
    return $data;
}


if (isset($_POST['submit'])){

$to = "idriseun222@gmail.com";

$to2 = "idrixy101@hotmail.com";

//Mail Code to client Email

    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];


	

    $message = wordwrap($msg);
    $mail = new PHPMailer;
    $mail->SMTPDebug = 1;
    $mail->IsSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';                 // Specify main and backup server
    $mail->Port = 465;                                    // Set the SMTP port
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'idriseun222@gmail.com';                // SMTP username
    $mail->Password = 'passwork';                  // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable encryption, 'ssl' also accepted

    $mail->From = $email;
    $mail->FromName = $name ." at portfolio page";
    $mail->AddAddress($to, 'Idris Lawal'); 
    $mail->AddAddress($to2, 'Idris Lawal');  // Add a recipient
   
    $mail->IsHTML(true);                                  // Set email format to HTML

    $mail->Subject = $subject;
    $mail->Body    = $message;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    if(!$mail->Send()){
   echo "Message was not sent";
   echo "Mailer Error: " . $mail->ErrorInfo;
} else {
   echo "<center><strong><h4><p style='color:green'>Message has been sent.</p></h4></strong></center>";
}
}


?>


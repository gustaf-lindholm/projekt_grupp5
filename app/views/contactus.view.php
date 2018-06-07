<h1>Do not hesitate to contact us</h1>

<form method="post" action="#">
  <div class="form-row">

  <div class="form-group col-md-6">
      <label for="inputName4">Subject</label>
      <input type="text" class="form-control" id="inputName4" name="subject" placeholder="Enter the topic of interest">
    </div>

    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" name="from" id="inputEmail4" placeholder="Your Email">
    </div>
 
    <div class="form-group col-md-12">
    <label for="exampleFormControlTextarea2">Question</label>
    <textarea class="form-control rounded-0" name="message" id="exampleFormControlTextarea2" placeholder="Share your thoughs with us" rows="3"></textarea>
</div>

  <div class="form-group col-md-4">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Remember Me
      </label>
    </div>
  </div>
  </div>
  <button type="submit" class="btn btn-primary col-md-12">Send</button>
  
</form>
</div>


<?php
//https://stackoverflow.com/questions/14456673/sending-email-with-php-from-an-smtp-server
var_dump($_POST);
$to = 'sarangua97@gmail.com';
$subject = $_POST['subject'];
$message = $_POST['message']; 
$from = $_POST['from'];
 
/*
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->CharSet = 'UTF-8';

$mail->Host       = "mail.example.com"; // SMTP server example
$mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->Port       = 25;                    // set the SMTP port for the GMAIL server
$mail->Username   = "username"; // SMTP account username example
$mail->Password   = "password";        // SMTP account password example
*/

// Sending email
if(mail($to, $subject, $message)){
    echo 'Your mail has been sent successfully.';
} else{
    echo 'Unable to send email. Please try again.';
}
?>
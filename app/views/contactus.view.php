<?php
$errors = [];
$missing = [];
//If POST send is set, please save the following variables
if (isset($_POST['send'])) {
    $expected = ['name', 'email', 'comments'];
    $required = ['name', 'comments'];
    $to = 'Sarangua <sarangua97@gmail.com>';
    $subject = 'Feedback from online form';
    $headers = [];
    $headers[] = 'From: webmaster@example.com';
    $headers[] = 'Cc: gustaf@backers.fi';
    $headers[] = 'Content-type: text/plain; charset=utf-8';
    $authorized = '-fsarangua97@gmail.com';
    require 'process_mail.php';
    if ($mailSent) {
        header('Location:'.URLrewrite::BaseURL());
        exit;
        // echo "Message: \n\n";
        // echo htmlentities($message);
        // echo "Headers: \n\n";
        // echo htmlentities($headers);
        // echo htmlentities($to);
    }
}
?>

<div class="main_Contact">

<h1>Contact Us</h1>
<?php if ($_POST && ($suspect || isset($errors['mailfail']))) : ?>
<p class="warning">Sorry, your mail couldn't be sent.</p>
<?php elseif ($errors || $missing) : ?>
<p class="warning">Please fix the item(s) indicated</p>
<?php endif; ?>

<div class="wrapper">
<form method="post" action="#">

<div class="form-row">
  <div class="form-group">
    <label for="name">Name:
    <?php if ($missing && in_array('name', $missing)) : ?>
        <span class="warning">Please enter your name</span>
    <?php endif; ?>
    </label>
    <input type="text" name="name" id="name"
        <?php
        if ($errors || $missing) {
            echo 'value="' . htmlentities($name) . '"';
        }
        ?>
        >
    </div>

   <div class="form-group">
    <label for="email">Email:
        <?php if ($missing && in_array('email', $missing)) : ?>
            <span class="warning">Please enter your email address</span>
        <?php elseif (isset($errors['email'])) : ?>
            <span class="warning">Invalid email address</span>
        <?php endif; ?>
    </label>
    <input type="email" name="email" id="email"
        <?php
        if ($errors || $missing) {
            echo 'value="' . htmlentities($email) . '"';
        }
        ?>
        >
    </div>

    </div>
    
  <div class="form-group">
    <label for="comments">Comments:
        <?php if ($missing && in_array('comments', $missing)) : ?>
            <span class="warning">You forgot to add any comments</span>
        <?php endif; ?>
    </label>
      <textarea name="comments" id="comments"><?php
          if ($errors || $missing) {
              echo htmlentities($comments);
          }
          ?></textarea>
  </div>

  <div class="form-group">
    <input type="submit" name="send" id="send_My_Comments" value="Send Comments">
        </div>

</form>

        </div>
        </div>
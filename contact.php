<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->

  <head>
    <?php include "includes/header-core.php"; ?>
    <!-- captcha --> 
    <!--<script src='https://www.google.com/recaptcha/api.js'></script>--> 
  </head>

  <body id="index">
    <!--[if lt IE 7]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <?php include "includes/navbar.php"; ?>

     <div class="row center-align main">
       <!-- contact page here -->

        <?php
        //  captcha info:
        // site key= 6LdvMyAUAAAAAKuAIWJ1EuqXpHDxPVet-iNlAgJz
        // secret key= 6LdvMyAUAAAAAN5FG8WokcV1bSvHY7smLGGUNOEy
        // documentation at https://www.google.com/recaptcha/admin#site/337654639?setup
         ?>

         <div>
            <h2>Contact Us</h2>

            <?php
            if (isset($_POST['submit_msg'])){
                  //$response = json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LdvMyAUAAAAAN5FG8WokcV1bSvHY7smLGGUNOEy&response=".$_POST['g-recaptcha-response']));

                  //if ($response->success){ //https://www.google.com/recaptcha/admin#site/337654639?setup -->

                      if( !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])){
                          $error = "";
                      }
                      else{
                          $error="Please fill in all fields: ";
                      }

                      $receiver = "psk84@cornell.edu"; //always sent to Zeyu's email
                      $sender = filter_input(INPUT_POST,'email', FILTER_SANITIZE_EMAIL);
                      $name = filter_input(INPUT_POST,'name', FILTER_SANITIZE_STRING);
                      $message = filter_input(INPUT_POST,'message', FILTER_SANITIZE_STRING);

                      if (strlen($name) < 2){
                          $error.="Please enter your name.  ";
                      }
                      if (preg_match("/[^a-zA-Z\-\s]/", $name)){
                          $error.="Your name contains illegal characters.  ";
                      }

                      if (preg_match("/[^a-zA-Z0-9\.\,\:\!\-\s]/",$message)){
                          $error.="The message field contains illegal characters.  ";
                      }

                      if(strlen($error)<1){
                          $subject = "REDO Contact Form Submission";
                          $body = "Message from ".$name.":  ".$message;
                          $headers = "Reply to ".$name." at ".$sender;
                          mail($receiver,$subject,$body,$headers);
                          print("Your form has been submitted.");
                      }
                      else{
                          print("<p class='error'>$error</p>");
                      }
                  }
                  //else{
                  //    print("Please confirm that you are not a robot.");
                  //}


               // end 'if form was submitted'
          ?>

                <form class="cospo" action='contact.php' method='post' enctype='multipart/form-data'>
                    <input type="text" name="name" placeholder="Name">
                    <input type="email" name="email" placeholder="Email">
                    <textarea name="message" placeholder="Message" rows="5"></textarea>
                    <!-- captcha -->
                    <!--<div class="g-recaptcha" data-sitekey="6LeGfyUUAAAAAKlgeEycfo03lcAPkbELBL-zKahM"></div>--> 
                    <input class='button' type='submit' name='submit_msg'>
                </form>
            </div>

          </div>
          


    <?php include "includes/footer.php"; ?>


    <?php include "includes/js-scripts.php"; ?>


  </body>

</html>

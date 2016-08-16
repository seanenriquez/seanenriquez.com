<?php
if(isset($_POST['submit'])):
    if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])):
        //your site secret key
        $secret = '6Lf0WCYTAAAAAO5jTFu4QIlqu2Z9_EJmN7Npor3C';
        //get verify response data
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
        $responseData = json_decode($verifyResponse);
        
        $name = !empty($_POST['name'])?$_POST['name']:'';
        $email = !empty($_POST['email'])?$_POST['email']:'';
        $message = !empty($_POST['message'])?$_POST['message']:'';
        if($responseData->success):
            //contact form submission code
            $to = 'seanenriquez@gmail.com';
            $subject = 'Visitor message from seanenriquez.com';
            $htmlContent = "
                <h1>Message from seanenriquez.com visitor:</h1>
                <p><b>Name: </b>".$name."</p>
                <p><b>Email: </b>".$email."</p>
                <p><b>Message: </b>".$message."</p>
            ";
            // Always set content-type when sending HTML email
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            // More headers
            $headers .= 'From:'.$name.' <'.$email.'>' . "\r\n";
            //send email
            @mail($to,$subject,$htmlContent,$headers);
            
            $succMsg = 'Your message has been submitted successfully! I will respond as soon as possible.';
            $name = '';
            $email = '';
            $message = '';
        else:
            $errMsg = 'Robot verification failed, please try again.';
        endif;
    else:
        $errMsg = 'Opps! Make sure you have successfully completed the reCaptcha, or email me directly.';
    endif;
else:
    $errMsg = '';
    $succMsg = '';
    $name = '';
    $email = '';
    $message = '';
endif;
?>

<!DOCTYPE html>
<html lang="en">

<head>


 <?php include('includes/header.php');  ?>

</head>


<body>


        <?php include('includes/navbar.php'); ?>


<div id="#top" class="container">

    <div id="contact" class="contact">
        <h1>Get in Touch</h1>
                 <form action=""  method="POST">
                            <?php if(!empty($errMsg)): ?><div class="errMsg">   <?php echo $errMsg; ?></div><?php endif; ?>
                            <?php if(!empty($succMsg)): ?><div class="succMsg"><?php echo $succMsg; ?></div><?php endif; ?>
                            <input class="msginfo" type="text" value="<?php echo !empty($name)?$name:''; ?>" placeholder="Name" name="name">
                            <input class="msginfo" type="text" value="<?php echo !empty($name)?$email:''; ?>" placeholder="Email" name="email">
                            <br>
                            <textarea placeholder="Message" value="<?php echo !empty($name)?$message:''; ?>" name="message"></textarea><br>
                            <div class="g-recaptcha" data-sitekey="6Lf0WCYTAAAAAHdcu6Yz6ON5w5luntMYNrL2FCyD"></div>
                            <input name="submit" type="submit" class="sendbtn" value="Send">

                    </form>

        <br>
        <br>
        <br>
        <br>
        <br>
        <a href="mailto:seanenriquez@gmail.com?subject=Howdy!">Seanenriquez@gmail.com</a> 
        <br>
        <small>Located in Melbourne Florida</small>
        
              



    </div>




</div>
    





<?php include('includes/footer.php'); ?>

<?php include('includes/scripts.php'); ?>

</body>

 
</html>

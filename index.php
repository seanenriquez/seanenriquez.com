<!DOCTYPE html>
<html lang="en">

<head>


 <?php include('includes/header.php');  ?>

</head>


<body>


        <?php include('includes/navbar.php'); ?>


<div id="#top" class="container">
    <div class="promo">
        <div class="promo-block-home">
            
            <div class="promo-block-overlay">
                <h1>Sean Enriquez</h1>
                
            </div>
            <img src="http://i.imgur.com/ScuWeuX.jpg" alt="">
            <h1 class="title"></h1>

        </div>  

    </div>

    <div class="work">
        <div class="work-title">
            <h1> Web Work </h1>
        </div>

        <div class="row">
            <div class="block-1">
                <div class="text-overlay"></div>
                    <a href="melanie.php">
                        <img class="block-img" src="img/Melanie/mel_icon.png" alt="">
                    </a>
            </div>      
            <div class="block-1">
                <a href="">
                    <img class="block-img" src="http://placehold.it/1000x1000" alt="">
                    </a>
            </div>
            <div class="block-1">
                    <img class="block-img" src="http://placehold.it/1000x1000" alt="">
            </div>

        </div>
<!--
        <div class="row">
            <div class="block-2">
<img class="block-img" src="http://placehold.it/1000x1000" alt="">
                
            </div>
            <div class="block-1">
              <img class="block-img" src="http://placehold.it/1000x1000" alt="">
            </div>
        </div>

        <div class="row">
            <div class="block-3">
<img class="block-img" src="http://placehold.it/1200x1000" alt="">
            </div>
        </div>
    -->
            <div class="work-title">
            <h1> Visual Work </h1>
        </div>

        <div class="row">
            <div class="block-1">
                <a href="logos.php">
                    <span class="text-overlay">Logos text</span>
                <img class="block-img"  src="img/logos/logos.png" alt="">
                </a>
            </div>
            <div class="block-1">
                <a href="primal.php">
                    <img class="block-img" src="http://i.imgur.com/ScuWeuX.jpg" alt="">
                </a>
            </div>
            <div class="block-1">
                    <img class="block-img" src="img/test.jpg" alt="">
            </div>

        </div>

    <!--    <div class="row">
            <div class="block-2">
<img class="block-img" src="http://i.imgur.com/ScuWeuX.jpg" alt="">
                
            </div>
            <div class="block-1">
              <img class="block-img" src="img/test.jpg" alt="">
                
            </div>
            

        </div>

        <div class="row">

            <div class="block-3">
<img class="block-img" src="img/test.jpg" alt="">

                
            </div>
            

        </div>
    -->



    </div>

    <div id="contact" class="contact">
        <h1>Get in Touch</h1>
                 <form action="contact.php" target="_parent" method="post">

                            <input class="msginfo" type="text" placeholder="Name" name="cf_name">
                            <input class="msginfo" type="text" placeholder="Email" name="cf_email">
                            <br>
                            <textarea placeholder="Message" name="cf_message"></textarea><br>
                            <div class="g-recaptcha" data-sitekey="6Lf0WCYTAAAAAHdcu6Yz6ON5w5luntMYNrL2FCyD"></div>
                            <input type="submit" class="sendbtn" value="Send">
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

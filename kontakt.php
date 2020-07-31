<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$telefon = $_POST['telefon'];
		$email = $_POST['email'];
		$message = $_POST['comments'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/plain; charset=utf-8' . "\r\n";
		$headers .= 'From: <'.$email.'>' . "\r\n";
		$to = 'mediatoragatazieba@gmail.com'; 
		$subject = 'Formularz kontaktowy - mediatoragatazieba.pl';
		
		$body ="Wiadomość od użytkownika $name tel. $telefon email: $email \r\n\r\n Treść:\r\n $message";
		
	if (mail ($to, $subject, $body, $headers)) {
		$result='<div class="alert alert-success">Dziękujemy za przesłane zapytanie.</div>';
	} else {
		$result='<div class="alert alert-danger">Wystąpił błąd. Spróbuj ponownie.</div>';
	}

	}
?>


<!DOCTYPE html>
<html>

<head>
    <title>Mediator Stały - Agata Zięba - Mediacje Rodzinne</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="description" content="Mediator Stały Agata Zięba - Usługi z zakresu Mediacji Rodzinnej, Mediacji Cywilnej oraz Mediacji Gospodarczej">
    <meta name="keywords" content="">
    <meta name="author" content="ITlike.pl">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- pliki CSS: -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/jquery.bxslider.css" rel="stylesheet" media="screen">
    <link href="css/animate.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="css/moje.css" rel="stylesheet" media="screen">
    <!-- fonty -->
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400i,700|Roboto:300,400,400i,700&amp;subset=latin-ext" rel="stylesheet">
    <link rel="icon" type="image/svg" href="images/fav-icon.svg">
</head>

<body>
   
      <!--! Facebook wigget -->
      
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pl_PL/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div id="like-box">
 
<div class="outside">
 
<div class="inside"><div class="fb-like-box" data-href="https://www.facebook.com/Mediacje-od-a-do-z-645326859253868/" data-width="292" data-height="295" data-show-faces="true" data-stream="false" data-header="false"></div></div>
</div>
<div class="belt">Facebook</div>
</div>
      
<!--! Facebook wigget -->   
    <div id="main">

        <!--###############################-->
        <!-- HEADER #########################-->
        <!--###############################-->

        <div class="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-right">
                        <ul>
                            <li><i class="fas fa-map-marker-alt"></i> Podlipie 27</li>
                            <li><i class="fas fa-phone"></i> Tel: 608 623 790</li>
                            <li><i class="fas fa-envelope"></i>mediatoragatazieba@gmail.com</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>




        <!--###############################-->
        <!-- MENU #########################-->
	    
	    
	    
	 
        <!--###############################-->

        <nav class="navbar navbar-default" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="logo-home" href="index.html"><img src="images/logo.svg" class="img-responsive" alt=""></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.html">Strona Główna</a></li>
                        <li><a href="mediacja.html">Mediacja</a></li>
                        <li><a href="mediacja-rodzinna.html">Mediacja Rodzinna</a></li>
                        <li><a href="mediacja-gospodarcza.html">Mediacja Gospodarcza</a></li>
                        <li><a href="mediacja-cywilna.html">Mediacja Cywilna</a></li>
                        <li><a href="kontakt.php" class="active">Kontakt</a></li>


                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>


        <div class="inside">


            <!--###############################-->
            <!-- kontent ######################-->
            <!--##############################-->


            <section id="contact">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-md-6" style="margin-bottom: 30px;">
                           
                        <div class="row">
				          	<div id="message">
							<?php echo $result; ?>
							</div>
							
		                    <form method="post" action="kontakt.php#contactform" id="contactform">
		                    	<div class="col-md-12">
		                        <input class="form-control" type="text" name="imie i nazwisko" id="name" placeholder="Imię i Nazwisko" required>
		                        <input class="form-control" type="email" name="email" id="email" placeholder="Email"  required>
		                        <input class="form-control bfh-phone" data-format="ddddddddd" type="phone" name="telefon" id="website" placeholder="Telefon" required>
		                        </div>
		                        <div class="col-md-12">
		                        <textarea class="form-control" name="comments" id="comments" placeholder="Treść Wiadomości" rows="14" required></textarea>
		                        <input class="btn-alt " type="submit" name="submit" value="Wyślij">
		                        </div>
		                    </form>
			            </div>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <div class="section-title">
                                <h3>Kontakt</h3>
                                <p><strong>Agata Zięba</strong> - Mediator Stały</p>
                            </div>

                            <ul class="contact-list">
                                <li><i class="fas fa-map-marker-alt"></i> Podlipie 27</li>
                                <li><i class="fas fa-phone"></i> Tel: 608 623 790</li>
                                <li><i class="fas fa-envelope"></i> mediatoragatazieba@gmail.com</li>
                            </ul>
                            <p>"Zgoda buduje, a niezgoda rujnuje"</p><p>Tracimy nie tylko pieniądze ale i zdrowie a zdrowie jest jedną z najważniejszych wartości dla człowieka. Ponieważ człowiek zdrowy jest szczęśliwy, a tego wszyscy chcemy i sobie życzymy. Nie ma sytuacji bez wyjścia, wszystko można rozwiązać tylko trzeba razem porozmawiać.</p><p>Serdecznie zapraszam na spotkanie.</p>

                        </div>
                        <div class="col-md-12">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d40788.13472496227!2d19.450212930761946!3d50.287103837517826!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4716e6d52caab585%3A0x9321374436bafeef!2sPodlipie+27%2C+32-329+Podlipie!5e0!3m2!1spl!2spl!4v1554759047538!5m2!1spl!2spl" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
	                    </div>
                    </div>
                </div>
            </section>


            <section id="haslo" class="dark-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 slogan">
                            <p>"Pamietajmy, że lepiej budować mosty, a niżeli stawiać mury"</p>
                        </div>
                    </div>
                </div>
            </section>



        </div>
        <!--##############################-->
        <!-- stopka ######################-->
        <!--##############################-->

        <div class="footer">
            <div class="sub-footer">
                <div class="container text-center"> <span class="copyright">Copyright © 2019 | Mediator Stały Agata Zięba | ITlike.pl</span> </div>
            </div>
        </div>





    </div>
    <!-- main  -->

    <!-- sekcja JavaScript  -->

    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/npm.js"></script>



</body>

</html>

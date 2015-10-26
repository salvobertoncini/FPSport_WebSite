<?php
session_start();
// includiamo il file di configurazione
@include "config.php";

 ?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8" />

    <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>F.P. Sport Messina</title>
    
    
    <!-- Mobile viewport optimized: j.mp/bplateviewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
   <!-- JavaScript -->
   <script src="js/modernizr-1.7.min.js"></script>
   <script src="js/jquery-1.7.1.min.js"></script>

    <!-- Style -->
    <link href="style.css" rel="stylesheet" />
    <link href="css/responsive.css" rel="stylesheet" />
    
    <link rel="stylesheet" href="slick-style.css"/>
    <link rel="stylesheet" href="css/slick.css"/

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>

          <!-- MENU RESPONSIVE -->
   <script>
    $(document).ready(function(){   
        
            
            //When btn is clicked
            $(".btn-responsive-menu").click(function() {
                $("#mainmenu").toggleClass("show");

                

            });

        
            
            // When resize
            $(window).resize(function () {
                if ($(window).width() > 767) {
                    $("#mainmenu").show();
                } else {
                    $("#mainmenu").hide();
                }
            });
    
    }); 
    </script>
 
</head>
<body>

<div id="wrapper">

    <header id="header">
    
            <h1 id="site-title"><a href="index.php">F.P. Sport Messina</a></h1>
            
            <!-- <form class="search" method="get" action="">
                 <input type="text" class="s top-search" value="Cerca..." name="s" onBlur="if (this.value == '') {this.value = 'Cerca...';}" onFocus="if (this.value == 'Cerca...') {this.value = '';}" />
                 <input type="submit" value="Search" style="visibility:hidden"/>
            </form> -->
            
             <div class="btn-responsive-menu">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </div>

    </header> <!-- #header -->
    
    <div id="mainmenu">
        <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="news.php">NEWS</a></li>
            <li><a href="societa.php">SOCIETà</a></li>
            <li><a href="team.php">TEAM</a></li>
            <li><a href="media.php">GALLERIA</a></li>
            <li><a href="partner.php">PARTNER</a></li>
            <li class="active"><a href="contatti.php">CONTATTI</a></li>
        </ul>
    </div> <!-- #mainmenu -->
    
    <div id="main">

    <!-- Prompt IE 6 and 7 users to install Chrome Frame:       chromium.org/developers/how-tos/chrome-frame-getting-started -->
    <!--[if lt IE 8]>
        <p class="chromeframe alert alert-warning">Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p>
    <![endif]--> 

        <div id="content">

            <h1>Contatti</h1>

            <article class="post">
            
                <img src="img/logo.png" / >
                <h2 class="entry-title">A.S.D. F.P. SPORT MESSINA</h2>
                
                <p><b>Sede:</b> Viale Boccetta, 49 - 98121 Messina (ME)</p>

                <p><b>Impianto Sportivo:</b> Comunale Ritiro, Via San Jachiddu - 98152 Messina (ME)
                <iframe width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJ6Z0DtzdMFBMRKf6yJEQf_xw&key=AIzaSyDiP-RGb5h--buRbzZFOADMYMknEx9aklQ" allowfullscreen></iframe></p>
    
                <p><b>Email:</b> <a href="mailto:info@fpsportmessina.it">info@fpsportmessina.it</a></p>
                <p><b>Facebook:</b> <a href="https://www.facebook.com/Fp-Sport-Basketminibasket-Messina-336987256433589/timeline/">www.facebook.com/Fp-Sport-Basketminibasket-Messina</a></p>

            </article> <!-- .post  -->
            
            <hr /> 

        </div> <!-- #content -->
    
        <aside id="sidebar">
            
            <h3>Facebook</h3>
            <div id="fb-root"></div>
                <script>(function(d, s, id) {
                  var js, fjs = d.getElementsByTagName(s)[0];
                  if (d.getElementById(id)) return;
                  js = d.createElement(s); js.id = id;
                  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4";
                  fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));</script>

            <div class="fb-page" data-href="https://www.facebook.com/Fp-Sport-Basketminibasket-Messina-336987256433589/timeline/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"></div>
            

            <div class="widget">
                <h3>Widget</h3>
                <ul>
                    <li><a href="#">Link 1</a></li>
                    <li><a href="#">Link 1</a></li>
                    <li><a href="#">Link 1</a></li>
                </ul>
            </div>

        </aside> <!-- #sidebar -->
    
    </div> <!-- #main -->


    <footer id="footer">
        
        <p>F.P. SPORT MESSINA Viale Boccetta, 49 - 98121 Messina (ME) - C.F. 97078240831</p>
        <p>Telefono: 370 1225080 - 392 9349367 - 389 4283360</p>
        <hr />
        <p>&copy;Salvo Bertoncini. All rights reserved. | <a href="/cms/login.php">CMS</a></p>
        
    </footer> <!-- #footer -->
    
    <div class="clear"></div>

</div> <!-- #wrapper -->

<!--Start Cookie Script--> 
<script type="text/javascript" charset="UTF-8" src="http://chs03.cookie-script.com/s/e1f0265bb4d9e7ce1c11e147221c9121.js"></script> 
<!--End Cookie Script-->

</body>
</html>


    

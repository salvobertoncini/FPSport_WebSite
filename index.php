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

   <script type="text/javascript" src="js/jquery.nivo.slider.js"></script>

<!--SLICK SLIDER -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="js/slick.min.js"></script>

<script>
$(document).ready(function(){
    
    $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.slider-nav'
    });
    
    $('.slider-nav').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        dots: true,
        centerMode: false,
        focusOnSelect: true,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2
              }
            }
        ]
    }); 
     
});
</script>

    <!-- Style -->
    <link href="style.css" rel="stylesheet" />
    <link href="css/responsive.css" rel="stylesheet" />
    <link href="css/flexslider.css" rel="stylesheet"  />
    
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
            <li class="active"><a href="index.php">HOME</a></li>
            <li><a href="news.php">NEWS</a></li>
            <li><a href="societa.php">SOCIETà</a></li>
            <li><a href="team.php">TEAM</a></li>
            <li><a href="media.php">GALLERIA</a></li>
            <li><a href="partner.php">PARTNER</a></li>
            <li><a href="contatti.php">CONTATTI</a></li>
        </ul>
    </div> <!-- #mainmenu -->
    
    <div id="main">

    <!-- Prompt IE 6 and 7 users to install Chrome Frame:       chromium.org/developers/how-tos/chrome-frame-getting-started -->
    <!--[if lt IE 8]>
        <p class="chromeframe alert alert-warning">Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p>
    <![endif]--> 

<!-- SLIDER -->
<div class="container-slider">
    <?php

            // includiamo la pagina contenente il codice per la creazione delle anteprime
            @include "articles/preview.php";

            // estraiamo i dati relativi agli articoli dalla tabella
            $sql = "SELECT * FROM posts ORDER BY id_posts DESC";
            $query = @mysql_query($sql) or die (mysql_error()); 
            
            if(mysql_num_rows($query) > 0){
                // se la tabella contiene records mostriamo tutti gli articoli attraverso un ciclo
                $i = mysql_num_rows($query);
                while($row = mysql_fetch_array($query)){
                    $titolo[] = stripslashes($row['title_posts']);
                    $immagine[] = $row['image_posts'];
                }

                $N=$i;
                //valorizziamo una variabile con il link all'intero articolo

                $link5 = ".\articles\show.php?id=".$N; $titolo5 = $titolo[0]; $immagine3 = $immagine[0]; $N--;
                $link4 = ".\articles\show.php?id=".$N; $titolo4 = $titolo[1]; $immagine3 = $immagine[1]; $N--;
                $link3 = ".\articles\show.php?id=".$N; $titolo3 = $titolo[2]; $immagine3 = $immagine[2]; $N--;
                $link2 = ".\articles\show.php?id=".$N; $titolo2 = $titolo[3]; $immagine2 = $immagine[3]; $N--;
                $link1 = ".\articles\show.php?id=".$N; $titolo1 = $titolo[4]; $immagine1 = $immagine[4];
            }
            
            else{
              // se in tabella non ci sono records...
              echo "Nessun articolo presente.";
            
            }

            ?>
    <div class="slider slider-for">
        <div><a href=<?php echo "".$link5. " >"; ?><img src="img/1.jpg" alt="Berlin Wall"/></a><h3><a href=<?php echo "".$link5. " >".$titolo5; ?></a></h3></div>
        <div><a href=<?php echo "".$link4. " >"; ?><img src="img/2.jpg" alt="Brandenburg Port"/></a><h3><a href=<?php echo "".$link4. " >".$titolo4; ?></a></h3></div>
        <div><a href=<?php echo "".$link3. " >"; ?><img src="img/3.jpg" alt="Blue Street Art"/></a><h3><a href=<?php echo "".$link3. " >".$titolo3; ?></a></h3></div>
        <div><a href=<?php echo "".$link2. " >"; ?><img src="img/4.jpg" alt="Ramones Museum"/></a><h3><a href=<?php echo "".$link2. " >".$titolo2; ?></a></h3></div>
        <div><a href=<?php echo "".$link1. " >"; ?><img src="img/5.jpg" alt="Kreuzberg"/></a><h3><a href=<?php echo "".$link1. " >".$titolo1; ?></a></h3></div>
    </div>
    
    <div class="slider slider-nav">
        <div><img src="img/1.jpg" alt="Berlin Wall"/><h4><a href=<?php echo "".$link5. " >".$titolo5; ?></a></h4></div>
        <div><img src="img/2.jpg" alt="Brandenburg Port"/><h4><a href=<?php echo "".$link4. " >".$titolo4; ?></a></h4></div>
        <div><img src="img/3.jpg" alt="Blue Street Art"/><h4><a href=<?php echo "".$link3. " >".$titolo3; ?></a></h4></div>
        <div><img src="img/4.jpg" alt="Ramones Museum"/><h4><a href=<?php echo "".$link2. " >".$titolo2; ?></a></h4></div>
        <div><img src="img/5.jpg" alt="Kreuzberg"/><h4><a href=<?php echo "".$link1. " >".$titolo1; ?></a></h4></div>
    </div>
<hr />
</div>
            
        <div id="content">

            <h1>Ultime News</h1>
            <?php
            /*
            // includiamo la pagina contenente il codice per la creazione delle anteprime
            @include "articles/preview.php";

            // estraiamo i dati relativi agli articoli dalla tabella
            $sql = "SELECT * FROM posts ORDER BY id_posts DESC";
            $query = @mysql_query($sql) or die (mysql_error()); 
            
            if(mysql_num_rows($query) > 0){
                // se la tabella contiene records mostriamo tutti gli articoli attraverso un ciclo
                while($row = mysql_fetch_array($query)){
                    $titolo[] = stripslashes($row['title_posts']);
                    $immagine[] = $row['image_posts'];
                }
                */
                $N=$i;
                //valorizziamo una variabile con il link all'intero articolo

                $link3 = ".\articles\show.php?id=".$N; $titolo3 = $titolo[0]; $immagine3 = $immagine[0]; $N--;
                $link2 = ".\articles\show.php?id=".$N; $titolo2 = $titolo[1]; $immagine2 = $immagine[1]; $N--;
                $link1 = ".\articles\show.php?id=".$N; $titolo1 = $titolo[2]; $immagine1 = $immagine[2];
            /*}
            
            else{
              // se in tabella non ci sono records...
              echo "Nessun articolo presente.";
            
            }*/

            ?>


            <div class="lastnews">

                <ul>
                    <li>
                        <a href=<?php echo "".$link3.">"; ?>
                           <img src="img/times-square.jpg" class="index-thumb"/ style="max-width:200px;max-height:150px;">
                        </a>
                        <p><b><a href=<?php echo "".$link3. " >".$titolo3."</a></b></p>";?>
                    </li>
                    <li>
                        <a href=<?php echo "".$link2.">"; ?>
                           <img src="img/times-square.jpg" class="index-thumb"/ style="max-width:200px;max-height:150px;">
                        </a>
                        <p><b><a href=<?php echo "".$link2. " >".$titolo2."</a></b></p>";?>
                    </li>
                    <li>
                        <a href=<?php echo "".$link1.">"; ?>
                           <img src="img/times-square.jpg" class="index-thumb"/ style="max-width:200px;max-height:150px;">
                        </a>
                        <p><b><a href=<?php echo "".$link1. " >".$titolo1."</a></b></p>";?>
                    </li>
            
                </ul>

                

            </div> <!-- .classlastnews -->

        <h1>Classifica</h1>
        
        <table width ="100%" weight="100%" border="1px solid" >
            <caption>Serie C Silver 2015/2016</caption>
            <tbody>
                <thead>
                    <tr>
                       <td>#</td>
                       <td>Logo</td>
                       <td>Nome</td>
                       <td>Giornate</td>
                       <td>W</td>
                       <td>L</td>
                       <td>CF</td>
                       <td>CS</td>
                       <td>DC</td>
                       <td>Punti</td>
                   </tr>
                </thead>
                <tr>
                  <td>1</td>
                  <td>X</td>
                  <td>F.P. Sport Messina</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>X</td>
                  <td>Costa d'Orlando</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>X</td>
                  <td>Green Basket Palermo</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>X</td>
                  <td>Kama Aretusa</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>X</td>
                  <td>"Peppino Cocuzza" San Filippo del Mela</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>X</td>
                  <td>Minibasket Milazzo</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                </tr>
                <tr>
                  <td>7</td>
                  <td>X</td>
                  <td>Zannella Basket Cefalù</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                </tr>
                <tr>
                  <td>8</td>
                  <td>X</td>
                  <td>Vis Reggio Calabria</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                </tr>
                <tr>
                  <td>9</td>
                  <td>X</td>
                  <td>Nertos Cosenza</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                </tr>
                <tr>
                  <td>10</td>
                  <td>X</td>
                  <td>A.S.D. Patti</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                </tr>
            </tbody>
        </table>
        
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
                <h3>Prossima Partita</h3>
                <h3>Ultima Partita</h3>
                <h3>LIVE</h3>
            </div>

        </aside> <!-- #sidebar -->
    
    </div> <!-- #main -->


    <footer id="footer">
        
        <p>F.P. SPORT MESSINA Viale Boccetta, 49 - 98121 Messina (ME) - C.F. 97078240831</p>
        <p>Telefono: 370 1225080 - 392 9349367 - 389 4283360</p>
        <hr />
        <p>&copy;Salvo Bertoncini. All rights reserved. | <a href="./cms/login.php">CMS</a></p>
        
    </footer> <!-- #footer -->
    
    <div class="clear"></div>

</div> <!-- #wrapper -->

<!--Start Cookie Script--> 
<script type="text/javascript" charset="UTF-8" src="http://chs03.cookie-script.com/s/e1f0265bb4d9e7ce1c11e147221c9121.js"></script> 
<!--End Cookie Script-->

</body>
</html>


    

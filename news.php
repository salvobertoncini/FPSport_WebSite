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
            <li class="active"><a href="news.php">NEWS</a></li>
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

        <div id="content">

            <h1>News</h1>

            <?php

            // includiamo la pagina contenente il codice per la creazione delle anteprime
            @include "articles/preview.php";

            // estraiamo i dati relativi agli articoli dalla tabella
            $sql = "SELECT * FROM posts ORDER BY id_posts DESC";
            $query = @mysql_query($sql) or die (mysql_error());

            //verifichiamo che siano presenti records
            if(mysql_num_rows($query) > 0){
              // se la tabella contiene records mostriamo tutti gli articoli attraverso un ciclo
              while($row = mysql_fetch_array($query)){
                $art_id = $row['id_posts'];
                $autore = stripslashes($row['id_users']);
                $titolo = stripslashes($row['title_posts']);
                $data = $row['data_posts'];
                $articolo = $row['articles_posts'];


                $nomecognomeSQL = "SELECT name_users, surname_users FROM users WHERE id_users = '".$autore."'";
                $queryAutore = @mysql_query($nomecognomeSQL) or die (mysql_error());
                if(mysql_num_rows($queryAutore) > 0)
                        if ($riga = mysql_fetch_array($queryAutore)) {
                          $nome_autore = $riga['name_users'];
                          $cognome_autore = $riga['surname_users'];
                        }
            ?>
            
            <?php

                //valorizziamo una variabile con il link all'intero articolo
                $link = "... <br><a href=\".\articles\show.php?id=".$art_id."\">Leggi tutto</a>";

                echo "<article class=\"post\"><h2 class=\"entry-title\"><a href=\".\articles\show.php?id=$art_id\">".$titolo."</a></h2><div class=\"entry-content\">";
               
                // creaimo l'anteprima che mostra le prime 100 parole di ogni singolo articolo
                // per farlo utilizzo una funzione che vi presenterò più avanti
                echo "<p>".@anteprima($articolo, 100, $link)."</p></div></article>"; 
                echo "<br><br>";
               
                // formattiamo la data nel formato europeo
                $data = preg_replace('/^(.{4})-(.{2})-(.{2})$/','$3-$2-$1', $data);

                // stampiamo una serie di informazioni
                echo  "<p>Scritto da <b>". $nome_autore . " " . $cognome_autore . "</b>";
                echo  " | Articolo postato il <b>" . $data . "</b></p><hr />";
                //echo  "| Commenti: "; 
              
                // mostriamo il numero di commenti relativi ad ogni articolo
                /*$conta = "SELECT COUNT(com_id) as conta from commenti WHERE com_art = '$art_id'";
                $conto = @mysql_query ($conta);
                $tot = @mysql_fetch_array ($conto);
                echo $sum2 = $tot['conta'];*/
                //echo "<hr>"; 
              } 
            }
            else{
              // se in tabella non ci sono records...
              echo "Nessun articolo presente. <hr />";
            
            }

        ?>
          
            <article class="post">
            
                <h2 class="entry-title"><a href="#">Titolo dell'articolo</a></h2>
                
                <p>In <a href="#">News</a>il 12/10/2012</b></p>

                <a href="#">
                   <img src="img/times-square.jpg" class="index-thumb"/>
                </a>

                <div class="entry-content">
                   Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div> <!-- .entry-content -->
    
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


    

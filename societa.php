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
            <li class="active"><a href="societa.php">SOCIETà</a></li>
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

            <h1>Società</h1>
            
            <article class="post">
            
                <h2 class="entry-title">Chi Siamo</h2>

                <div class="entry-content">
                    La società nasce, nel 2006, dalla voglia del prof. Francesco Paladina, di fare pallacanestro nella città di Messina, a soli 24 anni, e così nel settembre del 2005 dà vita al centro minibasket e nel settembre 2006 la società si affilia alla FIP (Federazione Italiana Pallacanestro) con la disputa dei primi campionati giovanili.
                    L’idea è chiara nella testa del suo principale artefice, mente e braccio unico di questa società, creare talenti da far giocare nei campionati senior regionali e nazionali.
                    La strada è lunga ed in salita, si combatte con l’invidia e con l’arroganza di una città che non vuole fare un salto di qualità, ma Francesco Paladina, aiutato dalla giovane età, non si da per vinto e con un’immensa passione inizia ad allenare nella palestra comunale di Ritiro e nella palestra della scuola Cesare Battisti, dove si fa basket e minibasket tutti i giorni della settimana.
                    Inizia così l’avventura di un giovanissimo gruppo di ragazzi nati nel 1991/1992/1993/1994 e successivamente 1995/1996 che partecipano con grande coraggio e personalità ai campionati di eccellenza regionali. Arrivano le prime soddisfazioni dopo “appena” 3 anni di attività, nell’aprile 2009, la squadra U15 conquista il titolo di CAMPIONI PROVINCIALI, e il titolo di CAMPIONI REGIONALI, imponendosi nelle FINALI REGIONALI sulle altre rappresentanti siciliane di Catania e Agrigento.
                </div> <!-- .entry-content -->
                
                <br />

                <h2 class="entry-title">Mission</h2>
                <div class="entry-content">
                    La Mission dell’A.S.D. F.P. SPORT MESSINA è caratterizzata dalla volontà di offrire lo spettacolo del basket, cercando di raggiungere risultati sportivi sempre più importanti, attraverso una corretta gestione economica, con la consapevolezza dell’importanza e del valore sociale dello sport soprattutto per i giovani, cercando di soddisfare le attese del pubblico e degli appassionati.
                    Sulla base di una struttura organizzativa professionale, la volontà della società è quella di raggiungere importanti risultati sportivi ed allo stesso tempo consentire ai giovani di fare sport in modo sano e competitivo.
                </div>

                <br />

                <h2 class="entry-title">Settore Giovanile</h2>
                <div class="entry-content">
                    La società partecipa ai campionati di tutte le categorie giovanili (Under 19, Under 17 di eccellenza, Under 17 regionale, Under 15, Under 14 elite’, Under 13, U12 ed Esordienti) e a tutte le categorie del settore MINIBASKET, maschile e femminile. 
                    E’ nel panorama cittadino la prima società per numero di iscritti al settore giovanile, che in soli 5 anni di attività, nel corso dell’anno sportivo 2011/2012 ha registrato 250 tesserati. 
                    Nel corso della stagione 2008-2009, la squadra Under 15 (nati nel 1994) ha vinto il CAMPIONATO PROVINCIALE ed a seguire è diventata CAMPIONE REGIONALE, con un record di 26 vittorie e 0 sconfitte. 
                    Nella stagione 2009/2010, le squadre Under 15 (nati nel 1995) ed ESORDIENTI (nati nel 1998/1999), hanno vinto il titolo di CAMPIONE PROVINCIALE. 
                    Nel 2010/2011 L’UNDER 13 (1998/1999), ha vinto il titolo di CAMPIONI PROVINCIALI, E INTERPROVINCIALI, battendo Palermo nello spareggio per l’accesso alle FINAL FOUR di categoria, che ha visto la formazione dell’ F.P. SPORT classificarsi al 4° posto. Sempre nel corso della stagione 2010/2011 la squadra militante nel campionato di 1^ divisione si è classificata al 1° posto conquistando il salto di categoria in PROMOZIONE. 
                    Inoltre, la società intrattiene relazioni con le altre società che operano sul territorio regionale con l’obiettivo di elevare la qualità complessiva dell’azione sui giovani. 
                    La società svolge dalla stagione sportiva 2007/2008 il campionato UNDER 17 DI ECCELLENZA, un campionato a valenza NAZIONALE, che raccoglie le migliori squadre della REGIONE SICILIANA e i migliori talenti, un campionato che ha permesso alla società di formare dei giovani da inserire nella prima squadra con continuità.
                </div>

                <br />

                <h2 class="entry-title">Progetto Scuola</h2>
                <div class="entry-content">
                    La società svolge dalla stagione sportiva 2006/2007 un’importante funzione all’interno di uno degli istituti scolastici inseriti nel territorio di reclutamento della società. 
                    In collaborazione con l’ISTITUTO COMPRENSIVO “CESARE BATTISTI”, il responsabile, Prof. Paladina Francesco ha dato vita al progetto scuola di educazione motoria “UN PALLONE NELLO ZAINO”, importante proposta formativa che ha riscosso un grande successo all’interno dell’istituto scolastico e tra le famiglie degli alunni.
                    Progetto totalmente gratuito di cui la società si assume gli oneri del pagamento dell’istruttore di educazione motoria e della fornitura di un minimo di abbigliamento tecnico a tutti gli alunni della scuola partecipanti al progetto, che viene svolto nelle ore cucciculari e che nell’ultimo anno scolastico erano 350.
                </div>

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


    

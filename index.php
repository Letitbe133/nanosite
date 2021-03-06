<?php
  require_once('contact.php');
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8"/>
    <title>TinySite | Un site web simple et efficace</title>
    <meta name="keywords" content="Création de sites web, communication digitale, responsive, site vitrine" />
    <meta name="publisher" content="cooldev">
    <meta name="description" content="Un site web simple, efficace et abordable pour permettre à tous de faire grandir ses idées grâce au web" />
    <meta name="viewport" content="width=device-width initial-scale=1 user-scalable=no" />
    <meta name="google-site-verification" content="rBRnpj5XSqUqYyI27OQ52hRYjk1PkW2Z1i3E9ces7oE" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css" />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="Shortcut icon" href="favicon.ico" type="image/x-icon" />
<!-- Open Graph Meta Tags -->
	<meta property="og:title" content="TinySite | Un site web simple et efficace par Cooldev.xyz" />
	<meta property="og:site_name" content="TinySite">
	<meta property="og:url" content="http://tinysite.cooldev.xyz/" />
	<meta property="og:description" content="Un site web simple et efficace, pour permettre à tous de faire grandir ses idées grâce au web" />
	<meta property="og:type" content="website" />
	<meta property="og:image" content="http://tinysite.cooldev.xyz/assets/og-img.png" />


<!-- Piwik -->
	<script type="text/javascript">
	  var _paq = _paq || [];
	  /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
	  _paq.push(["setDocumentTitle", document.domain + "/" + document.title]);
	  _paq.push(['trackPageView']);
	  _paq.push(['enableLinkTracking']);
	  (function() {
	    var u="//analytics.mpaw.xyz/piwik/";
	    _paq.push(['setTrackerUrl', u+'piwik.php']);
	    _paq.push(['setSiteId', '7']);
	    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
	    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
	  })();
	</script>
<!-- End Piwik Code -->


  </head>
  <body >
    <div class="navbar-fixed">
      <nav>
        <div class="nav-wrapper cyan darken-3">
        <a href="#" data-activates="mobile-menu" class="button-collapse right"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="#section1">Présentation</a></li>
          <li><a href="#section2">Personnalisation</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        <ul class="side-nav" id="mobile-menu">
          <li><a href="#section1">Présentation</a></li>
          <li><a href="#section2">Personnalisation</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        </div>
      </nav>
    </div><!--NAV-->
    <header>
    <div class="content">
        <div class="row">
          <div class="col s12 center-align">
				<img class="responsive-img" src="assets/logo-white.png" alt="Logo TinySite" width="200px">
          </div>
          <div class="col s12 ">
            <h1 class="center-align white-text">Un site web simple et efficace, pour permettre à tous de faire grandir ses idées grâce au web</h1>
            <div class="separator col s4 offset-s4 divider"></div>
          </div>

          <div class="col s12 social center-align">
            <a href="https://www.facebook.com/cooldevcrew" target="_blank"><img class="responsive-img" src="assets/logo-fb.png" alt="Lien vers facebook"></a>
            <a href="https://twitter.com/cooldev_crew" target="_blank"><img class="responsive-img" src="assets/logo-twitter.png" alt="Lien vers twitter"></a>
          </div>
        </div>
      </div>
      <div class="overlay">
      </div>
    </header><!--HEADER-->
<section id="section1" class="scrollspy">
      <div class="row">
        <div class="col s12 m8 offset-m2 ">
          <h2 class="center-align grey-text">Le TinySite est : </h2>
        </div>
        <div class="separator col s2 offset-s5 divider"></div>
        </div><!--TITLE-->
        <div class="row">
        <div id="cards" class="col s12 l10 offset-l1">
          <div class="col s12 m8 offset-m2 l4 ">
            <div class="card">
              <div class="card-image orange lighten-2 waves-effect waves-block waves-light">
                <img class="activator" src="assets/picto-pig.png" alt="Un site web abordable">
              </div>
              <div class="card-content">
                <h3 class="card-title activator">Abordable<i class="material-icons right">more_vert</i></h3>
              </div>
					<div class="card-reveal">
              <h4 class="card-title">A partir de 349 € ht <i class="material-icons right">close</i></h4>
              <h5>Inclus : </h5>
              <ul>
              	<li>Hébergement pendant 1 an</li>
              	<li>Nom de domaine pendant 1 an</li>
              </ul>
              <h5>Options : </h5>
					<ul>
              	<li>Modifications : 49€ ht par modification</li>
              	<li>Maintenance : 49€/an (hébergement et renouvellement du nom de domaine en .fr ou .com)</li>
              </ul>
              <p>Le TinySite que nous réalisons pour vous vous appartient. Vous pouvez à tout moment récuperer le code pour vous occuper vous-même de sa maintenance. Nous vous proposons même <a href="http://www.cooldev.xyz/formation-web.php" target="_blank"> une formation </a>pour ça !
              </div>
            </div>
          </div><!--CARD 1-->
        <div class="col s12 m8 offset-m2 l4 ">
          <div class="card">
            <div class="card-image teal lighten-3 card-image waves-effect waves-block waves-light">
					<img  class="activator" src="assets/picto-responsive.png" alt="Un site web adaptatif">
            </div>
            <div class="card-content">
              <h3 class="card-title activator">Adaptatif<i class="material-icons right">more_vert</i></h3>
            </div>
            <div class="card-reveal">
              <h4 class="card-title">TinySite est responsive<i class="material-icons right">close</i></h4>
              <p>La moitié des internautes vous cherche depuis un mobile. Le TinySite s'adapte à la majorité des supports web actuels. </p>
              </div>
          </div>
        </div><!--CARD 2-->
        <div class="col s12 m8 offset-m2 l4 ">
          <div class="card">
            <div class="card-image  red accent-2 waves-effect waves-block waves-light">
              <img class="activator" src="assets/picto-perso.png" alt="Un site web évolutif">
            </div>
            <div class="card-content">
              <h3 class="card-title activator">Evolutif<i class="material-icons right ">more_vert</i></h3>
            </div>
            <div class="card-reveal">
              <span class="card-title">Vos besoins évoluent ?<i class="material-icons right">close</i></span>
              <p>Votre site web vous suit ! Ajouter des sections, des pages...<br>Contactez-nous, nous vous proposerons des solutions adaptées.</p>
            </div>
          </div>
      </div><!--CARD 3-->
      </div>
		</div><!--CARDS-->

</section><!--SECTION 1-->

<section id="section2" class="cyan darken-2 scrollspy">

	 <div class="container">
	 	<div class="row">
      	<div class="col s12 m8 offset-m2 white-text">
        <h2 class="center-align">Un TinySite qui vous ressemble</h2>
        </div>
        <div class="separator col s2 offset-s5 divider"></div>
        <div class="col s12 center-align">
        <img class="responsive-img" src="assets/structure-tinysite.png" alt="Un tinySite c'est un site web avec votre logo, 3 sections personnalisables et vos coordonnées ">
        </div>
       </div>
      </div>

</section><!--SECTION 2-->

<section id="contact" class="container scrollspy">
	    <div class="col s12">
	      <h2 class="dark-green center-align">Contactez-nous !</h2>
	      <div class="col s12"></div>
	    </div>
	
	  <div class="row">
	    <form class="col s12" action="#contact" method="POST">
	
	      <div class="row">
	        <div class="input-field col s12">
	          <i class="material-icons prefix">account_circle</i>
	          <input placeholder="John Doe" id="name" name="nom" type="text" class="validate" required>
	          <label for="name">Votre nom</label>
	        </div>
	      </div>
	      <div class="row">
	        <div class="input-field col s12">
	          <i class="material-icons prefix">email</i>
	          <input placeholder="john.doe@mail.com" id="email" name="email" type="email" class="validate" required>
	          <label for="email">Votre adresse mail</label>
	        </div>
	      </div>
	      <div class="row">
	        <div class="input-field col s12">
	          <i class="material-icons prefix">subject</i>
	          <input placeholder="Objet de votre message" id="subject" name="objet" type="text" class="validate" required>
	          <label for="subject">Sujet</label>
	        </div>
	      </div>
	      <div class="row">
	        <div class="input-field col s12">
	          <i class="material-icons prefix">textsms</i>
	          <textarea placeholder="Votre message" id="message" name="message" type="text" class="materialize-textarea" required></textarea>
	          <label for="message">Votre message</label>
	        </div>
	      </div>
	      <div class="row">
	        <div class="col s12 center-align">
	          <button class="btn waves-effect waves-light cyan darken-3" id="submit" type="submit" name="submit">Envoyer
	            <i class="material-icons right">send</i>
	          </button>
	        </div>
	      </div>
	      <div id="feedback">
	        <?php echo $feedback; ?>
	      </div>
	    </form>
	
	  </div>
	</section><!--SECTION CONTACT FORM-->
   <footer class="page-footer cyan darken-2 ">
          <div class="container  ">
            <div class="row ">
              <div class=" col m4 s12 center-align">
                <h5 class="center-align white-text">Contacts</h5>
                <div class="separator col s2 offset-s5 divider"></div>
                <div class="col s12 xl6 center-align">
               	 <img src="assets/lio.png" alt="Lionel développeur web" width="60px;"><p><a class="center-align grey-text text-lighten-4" href="mailto:lionel@cooldev.xyz">lionel@cooldev.xyz</a></p>
                </div>
                <div class="col s12 xl6 center-align ">
               	<img src="assets/mi.png" alt="Mylène chargée de projets web" width="60px;"><p><a class="center-align grey-text text-lighten-4" href="mailto:mylene@cooldev.xyz">mylene@cooldev.xyz</a></p>
                </div>
              </div><!--CONTACT MAIL-->
              <div class="center-align social col m4  s12">
               <h5 class="white-text">Réseaux sociaux </h5>

               <div class="separator col s2 offset-s5 divider"></div>
                <div class="col s12 center-align">
                 <a href="https://www.facebook.com/cooldevcrew" target="_blank" ><img src="assets/logo-fb.png" alt="Suivez-nous sur Facebook"></a>
                 <a href="https://twitter.com/cooldev_crew" target="_blank" ><img src="assets/logo-twitter.png" alt="Suivez-nous sur Twitter"></a>
                </div>
               </div><!--RESEAUX SOCIAUX-->
              <div class="center-align col m4 s12">
                <h5 class="white-text">Adresse</h5>
                <div class="separator col s2 offset-s5 divider"></div>
               <div class="col s12"><p class="grey-text text-lighten-4">Cosens<br>2, rue de Rome<br>13001 Marseille</p></div>
               </div><!--ADRESSE-->
            </div>
          </div><!--CONTACTS-->
          <div class="footer-copyright grey-text ">
            <div class="container ">
           <span class="cyan-text text-lighten-3">CC BY-NC-SA 4.0 - 2017 /</span> <a class="cyan-text text-lighten-3" href="http://www.cooldev.xyz" target="_blank">La Team Cooldev</a>
            <a class="modal-trigger right cyan-text text-lighten-3" href="#modal1" >Mentions légales</a>
            <div id="modal1" class="modal modal-fixed-footer">
                <div class="modal-content">
                  <h3>SIRET</h3>
                  <p>Sous CAPE Cosens<br>SIRET : 419 369 798 00048 <br>N° Formateur : 93 13 113 41 13</p>
                  <h3>Responsable de la publication :</h3> <p>Agence web <a href="http://cooldev.xyz">Cooldev</a></p>
                  <h3>Hébergement :</h3>
                  <p><a href="https://gandi.net">GANDI SAS</a>, Société par Actions Simplifiée au capital de 300.000€ ayant son siège social au 63-65 boulevard Massena à Paris (75013) FRANCE, immatriculée sous le numéro 423 093 459 RCS PARIS N° TVA FR81423093459 Téléphone : +33.(0) 1 70.37.76.61 .</p>
                  <h3>Gestion des données personnelles :</h3>
                  <p>Votre vie privée est très importante pour nous. Pour connaître le trafic sur ce site internet, Nous utilisons <a href="https://piwik.org">Piwik</a>. Piwik est une solution d’analytics qui respecte votre vie privée conformément aux recommandations de la CNIL et ne demande aucune déclaration préalable.</p>
                 </div>
                <div class="modal-footer ">
                  <a href="#!" class="modal-action modal-close btn-floating "><i class="material-icons ">highlight_off</i></a>
                </div>
              </div><!--MODAL-->
            </div>
          </div><!--COPYRIGHT-->
        </footer><!--FOOTER-->
    <script
			  src="https://code.jquery.com/jquery-3.2.1.min.js"
			  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
			  crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js" ></script>
    <script type="text/javascript" src="js/main.js"></script>
    </script>
  </body>
</html>

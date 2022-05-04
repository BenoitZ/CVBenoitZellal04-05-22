<!DOCTYPE html>
<html>

  <head>
        <meta charset="utf-8" />
        <meta name="description" content="Cv de Benoit Zellal">

        <title>Benoit Zellal</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css">
  </head>


  <body>
   
    <header>    
          <h1> Benoit Zellal </h1>    
      <!-----navigateur----->
      <div class="container">
        <nav class = "fixed-top">
          <div class="row">
		        <div class="d-none d-sm-block" id="navbar" >
		          <button type="button" class="btn btn-info">
                <a href="#profil" class="text-dark">Profil </a>
              </button>
		          <button type="button" class="btn btn-success">
                <a href="#formation" class="text-dark">Formation-Expérience</a>
              </button>
		          <button type="button" class="btn btn-primary">
                <a href="#compétences" class="text-dark">Compétences</a>
              </button>
		          <button type="button" class="btn btn-warning">
                <a href="#intéret" class="text-dark">Centres d'intéret</a>
              </button>
		          <button type="button" class="btn btn-danger">
                <a href="#rencontre" class="text-dark">Contact</a>
              </button>
		          <button type="button" class="btn btn-info">
                <a href="#coordonnées" class="text-dark">Coordonnées</a>
              </button>
            </div>
          </div>
        </nav>
    </header> 


    <main>
      <!-----Profil----->
      <section class="bg-light ">
        <div class="container text-center">
          <div class="row">
            <div class="col-md-6 col-sm-12">
              <img src="img/Unknown.jpeg" alt="Photo de profil" class="img-responsive"/>
            </div>
            <div  id="profil" class="col-md-6 col-sm-12">
              <h4>Désireux de développer constamment mes compétences afin d’assurer mon évolution professionnelle, 
                  je suis confiant en ma capacité d’apprendre et avide de partage professionnel et créatif. </h4>
            </div>
          </div>
        </div>
      </section>


      <!-----Formation et éxpérience----->
      <section id="formation">
        <div class="container">
          <div class="row">
            <div class="col-6">
              <h2>Formation-Expérience</h2>
                <p> <strong> REMISE A NIVEAU <br> 
                  Comptable assistant / Developpeur web <br> 
                  </strong> Centre ESRP UGECAM 2022 </p>
                <p> <strong> DIPLOME CAP Opérateur Projectionniste <br> 
                  </strong> CNED 2009 </p>
                <p> <strong> DIPLOME BEP Comptabilité <br> 
                  </strong> Lycée Escoffier 2000-2002 </p>
                <p> <strong> Formation musicale <br> 
                  </strong> Conservatoire à rayonnement régional de Nice 2002-2017 </p>    
            </div>
            <div class="col-6">
              <h3> Expérience professionnelle </h3>
                <h4> Opérateur Projectionniste </h4>
                  <p> Formation et mise en situation d'assistant de direction, gestion de site, 
                    gestion d'équipe, projections, gestion d'événements, accueil client, 
                    mise en place d'une semaine cinématographique sur toutes sortes de supports 
                    informatiques, entretien de matériel de projection argentique et numérique </p>
                  <p> Juin 2007 - Janvier 2022 <br><strong> Les Arcades - Olympia Cannes - 
                    Cinéma Roquefort Les Pins - Le Dahut Valberg </strong> </p>
                  <p> Mai 2012 - Mai 2021 <br> <strong> Cinéma Olympia Cannes </strong> 
                    Projections Festival de Cannes, gestion des clients </p>
                <h4> Service Spectacle </h4>
                  <p> 2007 <strong> Mairie de Villeneuve-Loubet <br> </strong> 
                    Mise en place d'événements, saisonnier </p>
            </div>
          </div>
        </div>
      </section>


      <!-----Compétences----->
      <section>
        <h2 id="compétences">Compétences </h2>  
          <div class="skillbar-wrapper">
            </div><div class="skillbar clearfix" data-percent="100%">
              <div class="container">
                <div class="row">                
                  <div class="col-sm-4 col-lg-2">
                    <h5 class="skillbar-title btn-success"><span>HTML5</span></h5>
                  </div>
                  <div class="col-sm-8 col-lg-4">
                    <progress id=html5 max="100" value="30"></progress>
                  </div>
                  <div class="col-sm-4 col-lg-2">
                    <h5 class="skillbar-title btn-info"><span>CSS3</span></h5>
                  </div>
                  <div class="col-sm-8 col-lg-4">
                    <progress id=css3 max="100" value="30"></progress>
                  </div>
                </div>
              </div>        
            </div>
            <div class="skillbar clearfix" data-percent="100%">
              <div class="container">
                <div class="row">                
                  <div class="col-sm-4 col-lg-2">
                    <h5 class="skillbar-title btn-primary"><span>ANGLAIS</span></h5>
                  </div>
                  <div class="col-sm-8 col-lg-4">
                    <progress id=anglais max="100" value="80"></progress>
                  </div>
                  <div class="col-sm-4 col-lg-2">
                    <h5 class="skillbar-title btn-warning"><span>BOOTSTRAP</span></h5>
                  </div>
                  <div class="col-sm-8 col-lg-4">
                    <progress id=bootstrap max="100" value="30"></progress>
                  </div>
                </div>
              </div>
            </div>
            <div class="skillbar clearfix" data-percent="100%">
              <div class="container">
                <div class="row">                
                  <div class="col-sm-4 col-lg-2">
                    <h5 class="skillbar-title btn-danger"><span>INDESIGN</span></h5>
                  </div>
                  <div class="col-sm-8 col-lg-4">
                    <progress id=indesign max="100" value="40"></progress>
                  </div>
                  <div class="col-sm-4 col-lg-2">
                    <h5 class="skillbar-title btn-success"><span>PHP</span></h5>
                  </div>
                  <div class="col-sm-8 col-lg-4">
                    <progress id=php max="100" value="10"></progress>
                  </div>
                </div>
              </div>
            </div>
            <div class="skillbar clearfix" data-percent="100%">
              <div class="container">
                <div class="row">                
                  <div class="col-sm-4 col-lg-2">
                    <h5 class="skillbar-title btn-info"><span>JAVASCRIPT</span></h5>
                  </div>
                  <div class="col-sm-8 col-lg-4">
                    <progress id=javascript max="100" value="10"></progress>
                  </div>
                  <div class="col-sm-4 col-lg-2">
                    <h5 class="skillbar-title btn-secondary"><span>MUSIQUE</span></h5>
                  </div>
                  <div class="col-sm-8 col-lg-4">
                    <progress id=musique max="100" value="100"></progress>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </section>
         
      <hr>


      <!-----Centre d'intéréts----->
      <section>     
        <div class="container text-center">
          <div class="row" id="intéret">
            <div class="col">
              <h2>Centres d'intéret</h2>
              <h3>"mes projets"</h3>
            </div>
          </div>
        </div>   
        <!-----Musique----->
        <div class="container" id=musique>
          <div class="row"> 
            <h5 id="zik">- Musique - </h5> 
          </div>
          <div class="row">
            <div class="col-md-12 col-lg-3 offset-md-1" id="terrarium">
              <h2>Terrarium</h2>
                <p>Math rock - Post rock</p>
                  <iframe width="200" height="200" src="https://www.youtube.com/embed/x2rmaJee7_k" title="YouTube video player" 
                  frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                  </iframe>
                    <p>Groupe de post rock, math rock, rock progressif constitué de 
                    Gaetan Chaulacel à la guitare, Victor Martin à la batterie et moi même à la basse.</p>
            </div>
            <div class="col-md-12 col-lg-3 offset-md-1" id="duo">
              <h2>Duo Brisset-Zellal</h2>
                <p>Noise - Improvisation</p>
                  <iframe width="200" height="200" src="https://www.youtube.com/embed/GMJfB5aNXD0" title="YouTube video player" 
                  frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                  </iframe>                    
                     <p>Duo comprenant Nicolas Brisset à la batterie et moi même au saxophone. Improvisation libre et composition.</p>
            </div>
            <div class="col-md-12 col-lg-3 offset-md-1" id="ferre">
              <h2>Projet Férré</h2>
                <p>Poésie - Réinterprétation</p>
                  <iframe width="200" height="200" src="https://www.youtube.com/embed/2SysUGJjhUw" title="YouTube video player" 
                    frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                  </iframe>                     
                     <p>Réinterprétation de morceaux composés par Léo Férré. Avec Alexandre Bourgoin 
                      aux textes et moi même à la composition instrumentalle.</p>
            </div>
          </div>
        </div>
        <!-----galerie photo----->
        <div class="row"> 
          <h5>- Photographie - </h5> </div>
            <div class="row p-3">
              <div class="col-lg-3 col-sm-6">
                <img src="img/DSCF0712.jpeg" alt="Bleu" class="img-fluid" alt="Responsive image">
              </div>        
              <div class="col-lg-3 col-sm-6">
                <img src="img/DSCF0976.jpeg" alt="Nenuphar" class="img-fluid" alt="Responsive image">
              </div>                     
              <div class="col-lg-3 col-sm-6">
                <img src="img/DSCF1865.jpeg" alt="Triangle" class="img-fluid" alt="Responsive image">
              </div>                    
              <div class="col-lg-3 col-sm-6">
                <img src="img/DSCF7145.jpeg" alt="Temple" class="img-fluid" alt="Responsive image">
              </div>
            </div>
            <div class="row p-3">
              <div class="col-lg-3 col-sm-6">
                <img src="img/DSCF7281.jpeg" alt="Angkor" class="img-fluid" alt="Responsive image">
              </div>              
              <div class="col-lg-3 col-sm-6">
                <img src="img/DSCF7800.jpeg" alt="Lumiéres" class="img-fluid" alt="Responsive image">
              </div>                  
              <div class="col-lg-3 col-sm-6">
                <img src="img/DSCF8374.jpeg" alt="Construction" class="img-fluid" alt="Responsive image">
              </div>                      
              <div class="col-lg-3 col-sm-6">
                <img src="img/DSCF8375.jpeg" alt="Brouillard" class="img-fluid" alt="Responsive image">
              </div>
            </div>                     
        </div> 
      </section>


      <!-----Rencontre----->
      <section id="rencontre">
        <div class="container">
          <div class="d-flex ">
            <div class="col-lg-8 col-sm-12">
              
              <form action="contact.php" method="POST">
                <div class="form-group">
                    <h1 id="formulaire" >Contactez-moi ! </h1>                        
                  <div class="d-flex">
                    <input type="text" name="surname" placeholder="Nom" autocomplete="off" class="form-control"/>
                    <input type="text" name="firstname" placeholder="Prénom" autocomplete="off" class="form-control"/>
                  </div>
                    <input type="email" name="email" placeholder="Email" autocomplete="off" class="form-control"/>
                    <textarea rows="10" name="message" placeholder="Votre musique me mets dans une certaine transe, j'ai besoin d'en savoir plus !" class="form-control"></textarea>
                    <button type="submit" class="btn btn-lg btn-primary" id="submit">Envoyer</button>
                </div>
              </form>
          
            </div>
          </div>
        </div>
      </section>
    </main>

    
    <!-----Contact----->
    <footer>
      <div class="container" >
        <h2 id="coordonnées">Coordonnées</h2>                  
           <ul>
             <ol> Téléphone : 06.65.74.78.30 </ol>
             <ol> Mail : zellal.benoit@yahoo.fr </ol>
             <ol> Adresse : 17 Rue Auguste Escoffier <br>06270 Villeneuve-Loubet </ol>
           </ul>
      </div>
    </footer>
    



    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
    <script src="script.js"></script>

  </body>


</html>
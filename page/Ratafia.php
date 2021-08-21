<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../style.css" />
    <title>Didier Barbe Entreprise | Ratafia</title>

  </head>
  <body>

<header class="header-content">
      <?php 
        include '../include/Navbar.html';
      ?>
    <header id="header-content">
     
      <header id="navbar">
        <nav role='navigation'>
          <div id="menuToggle">
            <input type="checkbox" class="hamburger"/>
      
            <span class="hamburger"></span>
            <span class="hamburger"></span>
            <span class="hamburger"></span>
      
            <ul id="menu">
              <li class="title-text"><a href="../index.php"><h1>Didier Barbe Entreprise</h1></a></li>
              <li class="title-img"><a href="../index.php"><h1><img src="media/logo/logo_dbe.svg" alt="" class="logo-svg"></h1></a></li>
              <li><a href="index.php">Accueil</a></li>
              <li id="submenu"><a href="#" id="submenu-link">Produits</a>
                <ul id="submenu-list">
                  <li class="elements"><a href="page/Bientot.php">Magra Bendi</a></li>
                  <li class="elements"><a href="page/Ratafia.php">Ratafia</a></li>
                  <li class="elements"><a href="page/Bientot.php">Fine</a></li>
                  <li class="elements"><a href="page/Bientot.php">Marc</a></li>
                  <li class="elements"><a href="page/Bientot.php">Vodka</a></li>
                  <li class="elements"><a href="page/Bientot.php">Whisky</a></li>
                  <li class="elements"><a href="page/Bientot.php">Limoncello</a></li>
                  <li class="elements"><a href="page/Bientot.php">Liqueur Fine Safran</a></li>
                  <li class="elements"><a href="page/Bientot.php">Esprit de ratafia</a></li>
                </ul>
              </li>
              <li><a href="page/Footer.html">footer</a></li>
            </ul>
          </div>
        </nav>
      </header>

    <header class="header-content">
      <?php 
        include '../include/Navbar.html';
      ?>

      <nav id="nav-ratafia">
        <ul>
          <li class="elements-ratafia"><a href="#ratafia">Ratafia</a></li>
          <li class="elements-ratafia"><a href="#old">Vieux Ratafia</a></li>
          <li class="elements-ratafia"><a href="#veryold">Très vieux Ratafia</a></li>
          <li class="elements-ratafia"><a href="#confit">Confit de Ratafia</a></li>
        </ul>
      </nav>
    </header>
    <!--product ratafia-->
    <!-- ratafia -->
    <section id="ratafia" class="bg-black placement">
      <div class="article">
        <article class="presentation">
          <header>
            <h2 class="title">Ratafia</h2>
          </header>
          <header>
            <h3 class="subtitle">Présentation</h3>
          </header>
          <img src="../media/separation.svg" alt="séparateur" class="separator"/>
          <div class="information">
            <figure>
              <img src="../media/bouteille/ratafia.png" alt="bouteille de ratafia" id="bottle-ratafia"/>
              <figcaption class="legend-black">Ratafia</figcaption>
            </figure>
            <div class="text">
              <p class="element">
                Le Ratafia est l’apéritif traditionnel des vignerons champenois.
              </p>
              <p class="element">pendant les vendanges, au pied du pressoir.</p>
              <p class="element">
                On en buvait un verre au Moyen-Âge, pour ratifier un traiter,
                d’où le nom Ratafia.
              </p>
              <p class="element">
                Cet apéritif titrant à 18° il se classe dans la gamme des
                produits tel que le Pineau des Charentes.
              </p>
              <p class="element">
                La couleur de sa robe est 100% Naturel. Sans coloration ni
                décoloration.
              </p>
              <p class="element">
                Ce qui fait que notre ratafia change de couleur en fonction du
                raisin.
              </p>
            </div>
            <figure>
              <img src="../media/label/label_ratafia.png" alt="etiquette de ratafia" id="label-ratafia"/>
              <figcaption class="bg-black">Etiquette Ratafia</figcaption>
            </figure>
          </div>
          <header>
            <h3 class="subtitle">Comment le déguster</h3>
          </header>
          <img src="../media/separation.svg"alt="séparateur" class="separator"/>
          
          <p class="element">Le ratafia se boit bien frais nature et sans glace.</p>
          <p class="element">Agrémente les viandes blanches: Chapon aux morilles, Cailles aux raisins etc…</p>
          <a href="../media/recette/Ratafia.pdf" class="download">Télécharger Recette</a>
        </article>
      </div>
    </section>
    <!-- vieux ratafia -->
    <section id="old" class="bg-white placement">
      <div class="article">
        <article class="presentation">
          <header>
            <h2 class="title">Vieux Ratafia</h2>
          </header>
          <header>
            <h3 class="subtitle">Présentation</h3>
          </header>
          <img src="../media/separation.svg" alt="séparateur" class="separator"/>
          <div class="information">
            <figure>
              <img src="../media/bouteille/vieux_ratafia.png" alt="bouteille de vieux ratafia"id="bottle-old"/>
              <figcaption class="legend-white">Vieux Ratifia</figcaption>
            </figure>
            <div class="text">
              <p class="element">Depuis quatre générations, la famille Barbe élabore l’apéritif traditionnel le Ratafia.</p> 
              <p class="element">Pour concevoir notre vieux ratafia nous sélectionnons une seule vendange, que nous faisons vieillir au minimum 5 ans dans des fûts de chêne. Notre volonté est de faire des produits d’exception.</p>
              <p class="element">Cet apéritif titre a 18°. Il se boit comme son petit frère, bien frais et surtout sans glace.</p>
              <P class="element">Le Vieux Ratafia est 100% naturel, il n’y a aucune décoloration, n’y coloration.</P>
              <p class="element">Sa couleur peut varier en fonction de son petit frère sélectionné pour être mis en fût.</p>
              </p>
            </div>
            <figure>
              <img src="../media/label/label_vieux_ratafia-bordure.png" alt="etiquette de vieux ratafia" id="label-old"/>
              <figcaption class="legend-white">Etiquette Vieux Ratafia</figcaption>
            </figure>
          </div>
          <header>
            <h3 class="subtitle">Comment le déguster</h3>
          </header>
          <img src="../media/separation.svg" alt="séparateur" class="separator"/>
          <p class="element">Il se boit comme son petit frère, bien frais et surtout sans glace.</p>
          <p class="element">Le Vieux Ratafia peut accompagner du foie gras. Idéale avec un fromage de caractère.</p>
          <a href="../media/recette/Vieux Ratafia.pdf" class="download">Télécharger Recette</a>
        </article>
      </div>
    </section>
    <!-- très vieux ratafia -->
    <section id="veryold" class="bg-black placement">
      <div class="article">
        <article class="presentation">
          <header>
            <h2 class="title">Très Vieux Ratafia</h2>
          </header>
          <header>
            <h3 class="subtitle">Présentation</h3>
          </header>
          <img src="../media/separation.svg" alt="séparateur" class="separator"/>
          <div class="information">
            <figure>
              <img src="../media/bouteille/tres_vieux_ratafia.png" alt="bouteille de très vieux ratafia" id="bottle-veryold"/>
              <figcaption class="legend-black">Très vieux ratafia</figcaption>
            </figure>
            <div class="text">
              <p class="element">En Champagne on déguste du ratafia depuis le moyen Age, dès que l’art de la distillation fût maîtriser cela permettait de conserver le jus de raisin. </p>
              <p class="element">Ce breuvage traditionnel était donc en place, bien avant le Champage, celui-ci fit son apparition vers le 17ème siècle, grâce a Don Pérignon. </p>
              <p class="element">Benjamin Barbe, épaulé par son père, suivant les traces de son arrière Grand Père, a eu envie de donner la quintessence à cet apéritif ancestral, en donnant naissance à son Très Vieux Ratafia.</p> 
              <p class="element">Sélection des meilleurs moûts (jus de raisin non fermenté) auprès de ses partenaires viticulteurs, un mutage (alcool additionné au moût) de qualité, puis un vieillissement d’au moins dix ans, avec un affinage en fûts de chêne. </p>
              <p class="element">Chêne provenant de la région mis en oeuvre par un tonnelier situé en Champagne. </p>
              <p class="element">Un goût tout en subtilité et en profondeur.</p>
              <p class="element">Titrant à 18°, il s’apprécie frais, mais pas trop, bien évidemment sans glace.</p>
            </div>
            <figure>
              <img src="../media/label/label_tres_vieux_ratafia-bordure.png" alt="etiquette de très vieux ratafia" id="label-veryold"/>
              <figcaption class="legend-black">Etiquette Très Vieux Ratafia</figcaption>
            </figure>
          </div>
          <header>
            <h3 class="subtitle">Comment le déguster</h3>
          </header>
          <img src="../media/separation.svg" alt="séparateur" class="separator"/>
          <p class="element">Idéal pour un apéritif, avec des toasts aux foie gras.</p>
          <p class="element">Remplace un vin blanc liquoreux avec bonheur.</p>
          <p class="element">Il peut aussi s’apprécier seul tel une gourmandise.</p>
        </article>
      </div>
    </section>
    <!-- Confit de ratafia -->
    <section id="confit" class="bg-white placement">
      <div class="article">
        <article class="presentation">
          <header>
            <h2 class="title">Confit de Ratafia</h2>
          </header>
          <header>
            <h3 class="subtitle">Présentation</h3>
          </header>
          <img src="../media/separation.svg" alt="séparateur" class="separator"/>
          <div class="information">
            <figure>
              <img src="../media/bouteille/ratafia_confit.png" alt="Confit de ratafia & bouteille de ratafia" id="confit-ratafia"/>
              <figcaption class="legend-white">Ratafia & Confit de Ratafia</figcaption>
            </figure>
            <div class="text">
              <p class="element">Le confit de ratafia est du ratafia qui est gélifier</p>
            </div>
            <figure>
              <img src="../media/bouteille/duo-confit.png" alt="Confit de ratafia" id="duo-confit"/>
              <figcaption class="legend-white"> Confit de Ratafia</figcaption>
            </figure>
           </div>
          <header>
            <h3 class="subtitle">Comment le déguster</h3>
          </header>
          <img src="../media/separation.svg" alt="séparateur" class="separator"/>
          <p class="element">IL peut accompagner du foie gras, des Saint Jacques, du boudin noir ou blanc, ainsi que du chaource.</p>
        </article>
      </div>
    </section>
    <?php 
      include '../include/Footer.html';
    ?>
  </body>
</html>

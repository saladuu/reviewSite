<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="author" content="lucas">
  <meta name="description" content="Jou plek voor game reviews, betrouwbaar, onafhankelijk en snel, voor alle platforms. Vind de perfecte game!">
  <meta name="keywords" content="games, reviews, game reviews, GameRates, rates, games, minecraft, disco elysium, ark survival ascended, pikmin 3, no man's sky, black ops 6, r6s, rainbow six siege, subnautica, hogwarts legacy, elden ring, top games">
  <title>GameRates</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" href="img/algemeen/logo.png" type="image/X-icon">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=BBH+Sans+Bogle&family=Keania+One&family=Oswald:wght@200..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=BBH+Sans+Bogle&family=Keania+One&family=Oswald:wght@200..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  <script defer src="lib/dark-mode.js"></script>
</head>
<body>
  <header>
    <img id="headerLogo" src="img/algemeen/headerLogo.png" alt="logo">
     <nav>
      <a href="index.html">Home</a>
      <a href="games.html">games</a>
      <a href="">merch</a>
      <a href="">contact</a>
     </nav>
     <img onclick="transitie()" id="bulb" src="img/algemeen/bulb.png" alt="lichtbulb">
  </header>

  <main>
    <?php
      // 0 = kop
      // 1 = descriptie
      // 2 = rating
      // 3 = genre
      // 4 = PEGI
      // 5 = foto

      $pikmin = array(
      "pikmin 3", 
      "Pikmin 3 is een kleurrijke en strategische avonturengame waarin je de controle krijgt over drie kapiteins die neerstorten op de mysterieuze planeet PNF-404. Samen met verschillende soorten Pikmin – kleine plantachtige wezentjes met unieke eigenschappen – verken je de omgeving, verzamel je voedsel en los je puzzels op om te overleven. Terwijl je vijanden verslaat en obstakels overwint, moet je slim omgaan met tijd en middelen, want zodra de avond valt, wordt de planeet gevaarlijk. Dankzij de afwisselende gameplay, levendige wereld en charmante sfeer biedt Pikmin 3 een unieke mix van strategie en avontuur die zowel ontspannend als uitdagend is.", 
      "Rating: 8.5", 
      "genre: Story game", 
      "PEGI: 8+",
      "img/games/pikminReview.png"
    );

      $noMansSky = array(
      "No man's sky", 
      "No Man’s Sky is een uitgestrekte sci-fi avonturengame waarin je een vrijwel oneindig universum verkent, gevuld met unieke planeten, wezens en mysterieuze structuren. Je begint met een beschadigd ruimteschip en bouwt jezelf langzaam op door grondstoffen te verzamelen, technologie te upgraden en nieuwe systemen te ontdekken. Onderweg kun je handelen, vechten, bouwen, scannen en zelfs complete bases en vlootstations beheren. Elke wereld voelt anders dankzij procedurele generatie, waardoor verkennen altijd verrassend blijft. Met voortdurende updates, co-op mogelijkheden en enorme vrijheid is No Man’s Sky uitgegroeid tot een meeslepend en veelzijdig avontuur waarin jij bepaalt hoe je het universum ervaart.", 
      "Rating: 9.6", 
      "genre: MMO RPG", 
      "PEGI: 8+",
      "img/games/noMansSkyReview.png"
    );

      // pikmin
      // No man's sky

      $game = "pikmin";

      if ($game == "pikmin") {
        echo "<section id='review'>
              <div>
                <img id='reviewFoto' src='". $pikmin[5] ."' alt='Review foto'>
                <p id='reviewRating'>". $pikmin[2] ."</p>
                <p id='reviewGenre'>". $pikmin[3] ."</p>
                <p id='reviewPEGI'>". $pikmin[4] ."</p>
              </div>
              <article>
                <h1 id='reviewHeader'>". $pikmin[0] ."</h1>
                <p id='reviewDescriptie'>". $pikmin[1] ."</p>
              </article>
            </section>
            ";
      } else if ($game == "No man's sky") {
        echo "<section id='review'>
              <div>
                <img id='reviewFoto' src='". $noMansSky[5] ."' alt='Review foto'>
                <p id='reviewRating'>". $noMansSky[2] ."</p>
                <p id='reviewGenre'>". $noMansSky[3] ."</p>
                <p id='reviewPEGI'>". $noMansSky[4] ."</p>
              </div>
              <article>
                <h1 id='reviewHeader'>". $noMansSky[0] ."</h1>
                <p id='reviewDescriptie'>". $noMansSky[1] ."</p>
              </article>
            </section>
            ";
      } else {
        echo"error";
      }
      
    ?>
  </main>

  <footer>
    <picture>
      <a href="https://discord.com/"><img class="social" id="discord" src="img/algemeen/discord.png" alt="discord"></a>
      <a href="https://www.youtube.com/"><img class="social" src="img/algemeen/youtube.png" alt="youtube"></a>
      <a href="https://www.instagram.com/"><img class="social" src="img/algemeen/Instagram.png" alt="instagram"></a>
    </picture>
    <div id="email" class="contact">
      <img id="mail_icon" src="img/algemeen/email.png" alt="email">
      <p>GameRules@gmail.com</p>
    </div>
    <div class="contact">
      <img id="tel_icon" src="img/algemeen/tel.png" alt="email">
      <p>+31 6 358727853</p>
    </div>
    <div class="contact">
      <img id="info_icon" src="img/algemeen/info.png" alt="info">
      <p>2025 GameRates</p>
    </div>
  </footer>
</body>
</html>
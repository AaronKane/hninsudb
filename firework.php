<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta author="Zin Thaw Tun">

  <title>^_^ ^_~ Love ^_^ ^_~ </title>

  <link rel="icon" type="image/png" href=image/logo.png>
  <!-- style and css links-->
  <link rel="stylesheet" href="css/style.css">

  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

  <link rel="stylesheet" href="https://code.getmdl.io/1.1.1/material.light_blue-blue.min.css" />

  <!-- fonts -->

  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>

  <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>

</head>

<body>
  <!-- Simple header with scrollable tabs. -->
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header" id="header-for">
      <div class="mdl-layout__header-row">
        <!-- Title -->
        <span class="mdl-layout-title"><img src="image/love.png" class="shake-slow shake-constant" id="imglove" alt="love">   Love You Su</span>
      </div>
      <!-- Tabs -->

    </header>
    <div class="mdl-layout__drawer">
      <span class="mdl-layout-title"><img src="image/love.png" id="imglove" alt="love">   Love You Su</span>
      <nav class="mdl-navigation">
        <a class="mdl-navigation__link" href="love.php">Click On My Heart</a>
      </nav>
    </div>
    <main class="mdl-layout__content">


      <div class="mdl-grid" id="naminger" align="center">
        <div class="mdl-cell">

          <div class="mdl-js-ripple-effect">
            <div class="spinner hit-the-floor">23</div>
          </div>

          <a href="index.html" id="Skio" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast">Home</a>
          <a href="firework.php" id="Skio" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast">Restart</a>


          <div class="hit-the-floor shake-slow shake-constant">
            <h1>Happy Birthday</h1></div>
        </div>
      </div>

      <div class="mdl-grid" id="texter">


        <img src="image/love.png" alt="">


      </div>

      <footer class="mdl-mini-footer">
        <div class="mdl-mini-footer__left-section">
          <div class="mdl-logo">I Love You Like A Fat Kid Loves Cakes</div>
          <ul class="mdl-mini-footer__link-list">
            <li><a href="#">tunzinthaw@yahoo.com</a></li>
            <li><a href="#">© 2016 Zin Thaw Tun</a></li>
          </ul>
        </div>
      </footer>

    </main>
  </div>


  <audio autoplay id="myAudio">

    <source src="image/firework.mp3" type="audio/mpeg">

  </audio>

  <audio autoplay>

    <source src="image/HappyBirthday.mp3" type="audio/mpeg">

  </audio>


</body>

<script>
  var aud = document.getElementById("myAudio");
aud.onended = function() {
    window.location = "index.html";
};
</script>

<!-- script links and scripts-->
<script src="js/firework.js" type="text/javascript" charset="utf-8" async defer></script>

<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>

<script defer src="https://code.getmdl.io/1.1.0/material.min.js"></script>

</html>
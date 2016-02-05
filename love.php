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

  <link rel="stylesheet" href="css/ninja-slider.css">

  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">


  <link rel="stylesheet" href="https://code.getmdl.io/1.1.1/material.light_blue-blue.min.css" />

  <!-- fonts -->

  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>

  <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
<script>
window.onload = function () {
    if (! localStorage.justOnce) {
        localStorage.setItem("justOnce", "true");
        window.location.reload();
    }
}
</script>
</head>

<body>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header" >
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <!-- Title -->
        <span class="mdl-layout-title"><img src="image/love.png" class="shake-slow shake-constant" id="imglove" alt="love">   Love You Su
      </span>
      </div>
      <!-- Tabs -->

    </header>
    <div class="mdl-layout__drawer">
      <span class="mdl-layout-title"><img src="image/love.png" id="imglove" alt="love">  Love You Su</span>
      <nav class="mdl-navigation">
        <a class="mdl-navigation__link" href="love.php">Click On My Heart</a>
      </nav>
    </div>
     <main class="mdl-layout__content">



  <!--ninja-slider start-->
  <div id="sliderpad">
    <div id="ninja-slider">
      <div class="slider-inner mdl-shadow--2dp">
        <ul>
          <li>
            <a class="ns-img" href="image/1.jpg"></a>
            <div class="caption">Looking At You</div>
          </li>
          <li>
            <a class="ns-img" href="image/2.jpg"></a>
            <div class="caption">Falling In Love</div>
          </li>
          <li>
            <a class="ns-img" href="image/3.jpg"></a>
            <div class="caption">She So Cute</div>
          </li>
          <li>
            <a class="ns-img" href="image/4.jpg"></a>
            <div class="caption">Yes! True Love</div>
          </li>
          <li>
            <a class="ns-img" href="image/5.jpg"></a>
            <div class="caption">Hangout Together</div>
          </li>
          <li>
            <a class="ns-img" href="image/6.jpg"></a>
            <div class="caption">Love Forever</div>
          </li>
        </ul>
        <div class="navsWrapper">
          <div id="ninja-slider-prev"></div>
          <div id="ninja-slider-next"></div>
        </div>
      </div>
    </div>
  </div>
  <!--end-->
  <a href="firework.php" id="Skip" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast">Skip</a>
  <div class="mal-grid" id="middle">

    <div class="mdl-cell mdl-cell--12-col view" align="center">
      <div class="plane main">
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
      </div>
    </div>
  </div>

  <div class="mal-grid">
    <div class="mdl-cell mdl-cell--12-col" id="" align="center">

      <div>
        <h3 class="area">⚠ Love You ⚠</h3>
      </div>

    </div>
  </div>


  <footer class="mdl-mini-footer" id="footer">
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

    <source src="image/onecallaway.mp3" type="audio/mpeg">

  </audio>
</body>
<script>
  var aud = document.getElementById("myAudio");
  aud.onended = function() {
      window.location = "index.html";
  };
</script>
<!-- script links and scripts-->
<script src="js/ninja-slider.js" type="text/javascript" charset="utf-8" async defer></script>

<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>

<script defer src="https://code.getmdl.io/1.1.0/material.min.js"></script>

</html>
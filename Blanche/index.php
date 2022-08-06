<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style-index.css">
  <title>BLANCHE</title>

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script>
    $(function() {
      $('.fadein img:gt(0)').hide();
      setInterval(function() {
        $('.fadein :first-child').fadeOut().next('img').fadeIn().end().appendTo('.fadein');
      }, 1500);
    });
  </script>
  <script>
    function subscribe(value) {
      alert("Newsletter has been subscribed for: " + value);
      document.getElementById('email').value = '';
    }
  </script>
</head>

<body>
  <div class="headder">
    <div class="logo">
      <h1></h1>
    </div>
    <div class="navbar">
      <ul>
        <li class="navbarli"><a href="inprogress.php">SHOP</a></li>
        <li class="navbarli"><a href="inprogress.php">OUR STORY</a></li>
        <li class="navbarli"><a href="inprogress.php">EXPERTISE</a></li>
        <li><img src="images\Vector Smart Object 2.png" /></li>
        <li class="navbarli"><a href="inprogress.php">Contact</a></li>
        <li class="navbarli"><img src="images\cart.png" /></li>
      </ul>
    </div>
  </div>

  <div style="clear:both;"></div>

  <div class="bedfront">
    <img class="bedfrontimage" src="images\bed_front.png" />
    <img class="heading" src="images\bedfront_heading.png" />
  </div>
  <div class="fadein">
    <?php
    $dir = "./images/front/";
    $scan_dir = scandir($dir);

    foreach ($scan_dir as $img) :
      if (in_array($img, array('.', '..')))
        continue;
    ?>
      <img src="<?php echo $dir . $img ?>" alt="<?php echo $img ?>">
    <?php endforeach; ?>
  </div>
  <div class="premium">
    <img src="images\premium_image.png" />
  </div>
  <div class="imgfour">
    <img src="images\fourimg.png" />
  </div>
  <div class="bestseller">
    <img src="images\BestSellers.png" />
  </div>
  <div class="productname">
    <ul>
      <?php
      $randomNumber = rand(1, 3);
      ?>
      <li class="image1"><img src="images\towel<?php print_r($randomNumber); ?>.png"><img class="t1" src="images\t<?php print_r($randomNumber); ?>.png" /></li>
      <?php $randomNumber = $randomNumber + 1;
      if ($randomNumber > 3) {
        $randomNumber = $randomNumber % 3;
      } ?>
      <li class="image2"><img src="images\towel<?php print_r($randomNumber); ?>.png"><img class="t1" src="images\t<?php print_r($randomNumber); ?>.png" /></li>
      <?php $randomNumber = $randomNumber + 1;
      if ($randomNumber > 3) {
        $randomNumber = $randomNumber % 3;
      } ?>
      <li class="image3"><img src="images\towel<?php print_r($randomNumber); ?>.png"><img class="t1" src="images\t<?php print_r($randomNumber); ?>.png" /></li>
    </ul>
  </div>
  <div class="comfort">
    <img src="images\comforttext.png" />
    <img class="comfortimg" src="images\comfortimg4.png" />
    <!-- <p> huda </p> -->
  </div>

  <div class="readtestimony">
    <img src="images\readtestimony.png" />
  </div>
  <div class="instagram">
    <a href="inprogress.php">FOLLOW US ON </a>
    <a href="inprogress.php"><img src="images\instagram.png"></a>
  </div>
  <div class="lastimage">
    <img src="images\lastimg.png" />
  </div>
  <div class="lastdiv">
    <ul class="lastdivul">
      <li class="lastdivli">
        <ul style="list-style-type: none;">
          <li>
            <img src="images\ourstory.png" />
          </li>
          <li><img src="images\lastimg1.png" /></li>
          <li><img src="images\Layer 35.png" /></li>
        </ul>
      </li>
      <li class="lastdivli">
        <ul style="list-style-type: none;">
          <li>MORE..</li>
          <li>About Us</li>
          <li>Contact Us</li>
          <li>Track My Order</li>
          <li>FAQ</li>
        </ul>
      </li>
      <li class="lastdivli">
        <ul style="list-style-type: none;">
          <li>SHOP</li>
          <li>Bed Line</li>
          <li>Bath Towels</li>
          <li>Bathrobes</li>
          <li>Home Fragrances</li>
        </ul>
      </li>
      <li class="lastdivli">
        <ul style="list-style-type: none;">
          <li>NEWSLETTER</li>
          <li>Subscribe to receive updates,access to <br>exclusive deals, and more.</li>
          <li><input type="text" name="email" id="email" placeholder="Enter your email address" style="width: 60%; height: 30px;"><button type="button" onclick="subscribe(document.getElementById('email').value)" style="height: 34px; width: 25%;">SUBSCRIBE</button></li>
        </ul>
      </li>
    </ul>
  </div>
  <div class="payment">
    <div class="blauche">
      <img src="images\BLAUCHE.png" />
    </div>
    <div class="layer36"> <img src="images\Layer 36.png" />
    </div>
  </div>
</body>

</html>
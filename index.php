<?php
  $message_ua = 'Ти Чарівна, сліпуча і неповторна дівчина. Тобою наповнені всі мої думки і бажання! Ти надихаєш творити красу та робити цей унилий світ краще.';
  $message_ru = '';

  $name = '';
  $lng = 'ua';
  $message = '';

  if (!empty($_GET['name']))
    $name = $_GET['name'] . '...';

  if (!empty($_GET['lng']))
    $lng = $_GET['lng'];

  if ($lng == 'ua')
    $message = $message_ua;
  else if ($lng == 'ru')
    $message = $message_ru;
?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Привіт</title>
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <script src="js/jquery-3.1.1.min.js"></script>

    
    <script src="js/heart-it.js"></script>
    <link href="css/style.css" rel="stylesheet">
    <link href="css/flowers.css" rel="stylesheet">

    <!-- GOOGLE ANALYTIC-->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-97470161-1', 'auto');
      ga('send', 'pageview');
    </script>

  </head>
  <body>
    <center class="center">
      <section class="Quotes"><blockquote>
       <?php echo $name . ' ' . $message ?>
      </blockquote></section>
    </center>
    <br/>
    <br/>
    <br/>

    <!-- FLOWERS -->
    <div class='flower flower-0'><span></span></div>
    <div class='flower flower-1'><span></span></div>
    <div class='flower flower-2'><span></span></div>
    <div class='flower flower-3'><span></span></div>
    <div class='flower flower-4'><span></span></div>
    <div class='flower flower-5'><span></span></div>
    <div class='flower flower-6'><span></span></div>
    <!-- END FLOWERS-->

    <div class="bg_heart" id="heart">
    </div>

  </body>
</html>
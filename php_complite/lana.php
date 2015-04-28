<?php include("head.php"); ?>
  <body>
    <?php include("header.php"); ?>
    <main>
      <div class="container">
        <ol class="breadcrumb">
          <li><a href="index.php">Главная</a></li>
          <li class="active">Lana Grossa</li>
        </ol>
        <div class="row">
<div class="col-md-9 col-xs-12">
  <img src="img/logolana.png" alt="">
          <?php include("contents/lana.php"); ?>
</div>
          <?php include("sidebar.php"); ?>
        </div>
      </div>
    </main>
    <?php include("footer.php"); ?>
    <?php include("scripts.php"); ?>
    <?php include("contents/masorny.php"); ?>
  </body>
</html>
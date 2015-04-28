<?php include("head.php"); ?>
  <body>
    <?php include("header.php"); ?>
    <main>
      <div class="container">
        <ol class="breadcrumb">
          <li><a href="index.php">Главная</a></li>
          <li><a href="rowan.php">Rowan</a></li>
          <li class="active">Fine Cut</li>
        </ol>
        <div class="row">
          <?php include("contents/wool.php"); ?>
          <?php include("sidebar.php"); ?>
        </div>
      </div>
    </main>
    <?php include("footer.php"); ?>
    <?php include("scripts.php"); ?>
    <?php include("contents/masorny.php"); ?>
  </body>
</html>
<?php include("head.php"); ?>
  <body>
    <?php include("header.php"); ?>
    <main>
      <div class="container">
        <ol class="breadcrumb">
          <li class="active">Главная</li>
        </ol>
        <div class="row">
        <div class="col-md-9 col-xs-12">
          <h2>Изделия</h2>
          <?php include("contents/index.php"); ?>

<nav class="text-center">
  <ul class="pagination">
    <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
    <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
    <li><a href="index.php">2</a></li>
    <li><a href="index.php">3</a></li>
    <li><a href="index.php">4</a></li>
    <li>
      <a href="index.php" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>


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
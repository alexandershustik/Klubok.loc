<?php include("head.php"); ?>
  <body>
    <?php include("header.php"); ?>
    <main>
      <div class="container">
        <ol class="breadcrumb">
          <li><a href="index.php">Главная</a></li>
          <li class="active">Контакты</li>
        </ol>
        <div class="row">
          <?php include("contents/contacts.php"); ?>
          <?php include("sidebar.php"); ?>
        </div>
      </div>
    </main>
    <?php include("footer.php"); ?>
    <?php include("scripts.php"); ?>
  </body>
</html>
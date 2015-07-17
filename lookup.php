<?php require_once('header.php');
?>
<body class="wrapper page-minor">
  <div class="hero image-bg-1">
    <?php require_once('nav.php') ?>
  </div>
  </div>
  <div class="content content-centered">
    <h5>Please enter the name on your invitation (without the Mr. or Mrs.)</h5>
    <form class="form-inline" action="rsvp.php" method="post">
      <div class="form-group">
        <input type="text" class="form-control input-lg" name="name" placeholder="Travis Favaron">
      </div>
      <button type="submit" class="btn btn-default btn-lg">Find</button>
    </form>
  </div>
<?php require_once('footer.php') ?>

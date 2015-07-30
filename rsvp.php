<?php require_once('header.php');
?>
<body class="wrapper page-minor">
  <div class="hero image-bg-1">
    <?php require_once('nav.php') ?>
  </div>
  </div>
  <div class="content content-centered">
    <!-- <h5>Hang tight, you'll be able to RSVP soon!</h5> -->
    <h5>Please enter the name on your invitation (without the Mr. or Mrs.)</h5>
    <form class="form-inline" action="rsvp-form" method="post" data-toggle="validator">
      <div class="form-group">
        <input type="text" class="form-control input-lg" name="name" placeholder="Travis Favaron" required>
      </div>
      <button type="submit" class="btn btn-default btn-lg">Find</button>
    </form>
    <p>If you are having trouble finding your invitation, please <a href='contact'>contact us</a>.</p>
  </div>
<?php require_once('footer.php') ?>

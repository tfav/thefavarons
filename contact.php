<?php require_once('header.php');
?>
<body class="wrapper page-minor">
  <div class="hero image-bg-1">
    <?php require_once('nav.php') ?>
  </div>
  </div>
  <div class="content">
    <div class="form-wrapper">
    <h5>Contact Us</h5>
    <form class="" action="contact-thank-you.php" method="post" data-toggle="validator">
      <div class="form-group">
        <label for="name" class="control-label">Name</label>
        <input type="text" class="form-control" name="name" placeholder="Travis Favaron" required>
      </div>
      <div class="form-group">
        <label for="email" class="control-label">Email</label>
        <input type="email" class="form-control" name="email" placeholder="someone@example.com" required>
        <div class="help-block with-errors"></div>
      </div>
      <div class="form-group">
        <label for="message" class="control-label">Message</label>
        <textarea class="form-control" name="message" placeholder="Anything you'd like to say to us?" rows=5 columns=10 required></textarea>
      </div>
      <button type="submit" class="btn btn-default btn-lg">Send</button>
    </form>
  </div>
</div>
<?php require_once('footer.php') ?>

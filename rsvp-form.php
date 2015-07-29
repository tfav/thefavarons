<?php require_once('header.php') ?>
<?php require_once('db-connection.php');
 $name = htmlspecialchars($_POST['name']);
 $sql = "SELECT * FROM guests WHERE name = '$name'";

     if($result = mysqli_query($link, $sql)){

       $row = mysqli_fetch_array($result);
       // If guest is invited to both ceremony and reception, set local cookie for all_access == 1
       if(mysqli_num_rows($result) > 0 && $row[all_access] == 1 ){
         $_COOKIE['all_access'] = 1;
      // If guest is invited to only reception, set local cookie for all_access == 0
      } elseif(mysqli_num_rows($result) > 0 && $row[all_access] == 0 ) {
         $_COOKIE['all_access'] = 0;

   } elseif(mysqli_num_rows($result) <= 0) {
     echo "<div class='name-not-found'>
        <p>Sorry, we couldn't find your invitation. Please <a href='lookup.php'>try again</a>.</p>
        <p>If you are having repeated trouble, please <a href='contact.php'>contact us</a>.</p>
     </div>";

     // Close result set
     mysqli_free_result($result);
     die();
   }

}


// Close connection
mysqli_close($link);


?>
<body class="wrapper page-minor">
  <div class="hero image-bg-1">
    <?php require_once('nav.php') ?>
  </div>
  </div>
  <div class="content">
<div class="form-wrapper">
  <h4>Just a few details needed</h4>
  <hr>
    <form action="rsvp-controller.php" method="post" data-toggle="validator" role="form">
      <div class="form-group">
        <label for="name" class="control-label">Name</label>
        <input type="text" class="form-control" name="name" placeholder="Travis Favaron" required>
      </div>
      <?php if($_COOKIE['all_access'] == 1) {
        echo "
              <div class='form-group'>
                <h5>Ceremony &mdash; September 26th, 2015 at 10:30am</h5>
                <label class='control-label'></label>
                  <div class='radio'>
                    <label for='ceremony' class='radio-inline'>
                      <input type='radio' name='ceremony' value='1'> Will Celebrate in Person
                    </label>
                    <label for='ceremony' class='radio-inline'>
                      <input type='radio' name='ceremony' value='0'> Will Celebrate in Spirit
                    </label>
                  </div>
                </div>
                <div class='form-group dropdowns'>
                  <label for='number_of_guests' class='control-label'>Adults Attending</label>
                  <select class='form-control' name='number_of_adults_ceremony'>
                    <option value='0'>0</option>
                    <option value='1'>1</option>
                    <option value='2'>2</option>
                    <option value='3'>3</option>
                    <option value='4'>4</option>
                    <option value='5'>5</option>
                    <option value='6'>6</option>
                    <option value='7'>7</option>
                    <option value='8'>8</option>
                    <option value='9'>9</option>
                    <option value='10'>10</option>
                  </select>
                </div>
                <div class='form-group dropdowns'>
                  <label for='number_of_guests' class='control-label'>Kids Attending</label>
                  <select class='form-control' name='number_of_kids_ceremony'>
                    <option value='0'>0</option>
                    <option value='1'>1</option>
                    <option value='2'>2</option>
                    <option value='3'>3</option>
                    <option value='4'>4</option>
                    <option value='5'>5</option>
                    <option value='6'>6</option>
                    <option value='7'>7</option>
                    <option value='8'>8</option>
                    <option value='9'>9</option>
                    <option value='10'>10</option>
                  </select>
                </div>
              ";
              } ?>
    <h5>Reception &mdash; September 27th, 2015 at 7:00pm</h5>
      <div class="form-group">
        <label class="control-label"></label>
          <div class="radio">
            <label class="radio-inline" for="reception">
              <input type="radio" name="reception" value="1" required> Excited to Celebrate with You!
            </label>
            <label class="radio-inline" for="reception">
              <input type="radio" name="reception" value="0" required> Sad to Miss All the Fun
            </label>
          </div>
        </div>
        <div class="form-group dropdowns">
          <label for="number_of_guests" class="control-label">Guests Attending</label>
          <select class="form-control" name="number_of_adults_reception" required>
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
          </select>
        </div>
        <div class="form-group dropdowns">
          <label for="number_of_guests" class="control-label">Kids Attending</label>
          <select class="form-control" name="number_of_kids_reception" required>
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
          </select>
        </div>
      <hr>
      <div class="form-group">
        <label for="guest_names" class="control-label">Guest names</label>
        <textarea name="guest_names" class="form-control" placeholder="Travis Favaron, Ashley Thornburg" rows=5 columns=10 required></textarea>
      </div>
      <div class="form-group">
        <label for="song_request" class="control-label">Song Request</label>
        <input type="text" class="form-control" name="song_request" placeholder="Cha Cha Slide">
      </div>
      <hr>
      <h5>Mailing Address</h5>
      <p class="form-section-subtitle">For all of life's moments that require a good ol' fashioned snail mail update.</p>
      <div class="form-group">
          <label for="address_line_1" class="control-label">Address Line 1</label>
          <input type="text" class="form-control" name="address_line_1" placeholder="Street name and number" required>
      </div>
      <div class="form-group">
        <label for="address_line_2" class="control-label">Address Line 2 (optional)</label>
        <input type="text" class="form-control" name="address_line_2" placeholder="Apartment number" required>
      </div>
      <div class="form-group">
        <label for="city" class="control-label">City</label>
        <input type="text" class="form-control" name="city" placeholder="Austin" required>
      </div>
      <div class="form-group">
        <label for="state" class="control-label">State</label>
        <select name="state" class="form-control" required>
        	<option value="AL">Alabama</option>
        	<option value="AK">Alaska</option>
        	<option value="AZ">Arizona</option>
        	<option value="AR">Arkansas</option>
        	<option value="CA">California</option>
        	<option value="CO">Colorado</option>
        	<option value="CT">Connecticut</option>
        	<option value="DE">Delaware</option>
        	<option value="DC">District Of Columbia</option>
        	<option value="FL">Florida</option>
        	<option value="GA">Georgia</option>
        	<option value="HI">Hawaii</option>
        	<option value="ID">Idaho</option>
        	<option value="IL">Illinois</option>
        	<option value="IN">Indiana</option>
        	<option value="IA">Iowa</option>
        	<option value="KS">Kansas</option>
        	<option value="KY">Kentucky</option>
        	<option value="LA">Louisiana</option>
        	<option value="ME">Maine</option>
        	<option value="MD">Maryland</option>
        	<option value="MA">Massachusetts</option>
        	<option value="MI">Michigan</option>
        	<option value="MN">Minnesota</option>
        	<option value="MS">Mississippi</option>
        	<option value="MO">Missouri</option>
        	<option value="MT">Montana</option>
        	<option value="NE">Nebraska</option>
        	<option value="NV">Nevada</option>
        	<option value="NH">New Hampshire</option>
        	<option value="NJ">New Jersey</option>
        	<option value="NM">New Mexico</option>
        	<option value="NY">New York</option>
        	<option value="NC">North Carolina</option>
        	<option value="ND">North Dakota</option>
        	<option value="OH">Ohio</option>
        	<option value="OK">Oklahoma</option>
        	<option value="OR">Oregon</option>
        	<option value="PA">Pennsylvania</option>
        	<option value="RI">Rhode Island</option>
        	<option value="SC">South Carolina</option>
        	<option value="SD">South Dakota</option>
        	<option value="TN">Tennessee</option>
        	<option value="TX" selected="selected">Texas</option>
        	<option value="UT">Utah</option>
        	<option value="VT">Vermont</option>
        	<option value="VA">Virginia</option>
        	<option value="WA">Washington</option>
        	<option value="WV">West Virginia</option>
        	<option value="WI">Wisconsin</option>
        	<option value="WY">Wyoming</option>
        </select>
      </div>
      <div class="form-group">
        <label for="zipcode" class="control-label">Zipcode</label>
        <input type="text" class="form-control" name="zipcode" placeholder="78701" required>
      </div>
      <hr>
      <div class="form-group">
        <label for="comments" class="control-label">Additional Comments</label>
        <textarea class="form-control" name="comments" placeholder="Anything else you'd like to say to us?" rows=5 columns=10></textarea>
      </div>
      <button type="submit" class="btn btn-default btn-lg">RSVP</button>
    </form>
  </div>
</div>
<?php require_once('footer.php') ?>

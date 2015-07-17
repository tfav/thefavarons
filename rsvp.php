<?php require_once('header.php') ?>
<?php
$link = mysqli_connect("localhost", "root", "root", "thefavarons");

// Check db connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
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

   } else {
     header("Location: http:localhost:8888/");

     // Close result set
     mysqli_free_result($result);
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
    <form action="rsvp-controller.php" method="post">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name" placeholder="Mr. and Mrs. Travis Favaron" value="<?php echo $_POST['name'] ?>">
      </div>
      <?php if($_COOKIE['all_access'] == 1) {
        echo "
              <div class='form-group'>
                <h5>Ceremony &mdash; September 26th, 2015 at 10:30am</h5>
                <label class='control-label'>Will you be attending the ceremony?</label>
                  <div class='radio'>
                    <label for='ceremony' class='radio-inline'>
                      <input type='radio' name='ceremony' value='1'> Attending
                    </label>
                    <label for='ceremony' class='radio-inline'>
                      <input type='radio' name='ceremony' value='0'> Regretfully Decline
                    </label>
                  </div>
                </div>
                <div class='form-group'>
                  <label for='number_of_guests'>Guests Attending</label>
                  <select class='form-control' name='number_of_guests_ceremony'>
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
                <div class='form-group'>
                  <label class='control-label'>Kids attending?</label>
                    <div class='radio'>
                      <label for='kids_attending' class='radio-inline'>
                        <input type='radio' name='kids_attending_ceremony' value='1'> Yes
                      </label>
                      <label for='kids_attending' class='radio-inline'>
                        <input type='radio' name='kids_attending_ceremony' value='0'> No
                      </label>
                    </div>
                </div>
              ";
              } ?>
    <h5>Reception &mdash; September 27th, 2015 at 7:00pm</h5>
      <div class="form-group">
        <label class="control-label">Attending Reception?</label>
          <div class="radio">
            <label class="radio-inline" for="reception">
              <input type="radio" name="reception" value="1"> Attending
            </label>
            <label class="radio-inline" for="reception">
              <input type="radio" name="reception" value="0"> Regretfully Decline
            </label>
          </div>
        </div>
        <div class="form-group">
          <label for="number_of_guests" class="control-label">Guests Attending</label>
          <select class="form-control" name="number_of_guests_reception">
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
        <div class="form-group">
          <label class="control-label">Kids attending?</label>
            <div class="radio">
              <label for="kids_attending" class="radio-inline">
                <input type="radio" name="kids_attending_reception" value="1"> Yes
              </label>
              <label for="kids_attending" class="radio-inline">
                <input type="radio" name="kids_attending_reception" value="0"> No
              </label>
            </div>
        </div>
      <hr>
      <h5>Mailing Address</h5>
      <div class="form-group">
          <label for="address_line_1">Address Line 1</label>
          <input type="text" class="form-control" name="address_line_1" placeholder="Street name and number">
      </div>
      <div class="form-group">
        <label for="address_line_2">Address Line 2 (optional)</label>
        <input type="text" class="form-control" name="address_line_2" placeholder="Apartment number">
      </div>
      <div class="form-group">
        <label for="city">City</label>
        <input type="text" class="form-control" name="city" placeholder="Austin">
      </div>
      <div class="form-group">
        <label for="state">State</label>
        <select name="state" class="form-control">
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
        	<option value="TX">Texas</option>
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
        <label for="zipcode">Zipcode</label>
        <input type="text" class="form-control" name="zipcode" placeholder="78701">
      </div>
      <hr>
      <div class="form-group">
        <label for="guest_names">Guest names</label>
        <textarea name="guest_names" class="form-control" placeholder="Travis Favaron, Ashley Thornburg" rows=5 columns=10></textarea>
      </div>
      <div class="form-group">
        <label for="song_request">Song Request</label>
        <input type="text" class="form-control" name="song_request" placeholder="Cha Cha Slide">
      </div>
      <div class="form-group">
        <label for="comments">Additional Comments</label>
        <textarea class="form-control" name="comments" placeholder="Anything else you'd like to say to us?" rows=5 columns=10></textarea>
      </div>
      <button type="submit" class="btn btn-default btn-lg">RSVP</button>
    </form>
  </div>
</div>
<?php require_once('footer.php') ?>

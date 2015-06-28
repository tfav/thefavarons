<?php require_once('header.php') ?>
  <form action="rsvp.php" method="post">
    <div class="form-group">
      <label for="name">Name on Invitation</label>
      <input type="text" name="name" placeholder="Mr. and Mrs. Travis Favaron">
    </div>
    <div class="form-group">
      <label for="number_of_guests">Guests Attending</label>
      <select class="form-control" name="number_of_guests">
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
      <label for="guest_names">Guest names</label>
      <textarea name="guest_names" placeholder="Travis Favaron, Ashley Thornburg" rows=10 columns=4></textarea>
    </div>
    <div class="radio">
      <label for="kids_attending">
        <input type="radio" name="kids_attending" value="1"> Yes
        <input type="radio" name="kids_attending" value="0"> No
      </label>
    </div>
    <div class="radio">
      <label for="ceremony">
        <input type="radio" name="ceremony" value="1"> Yes
        <input type="radio" name="ceremony" value="0"> No
      </label>
    </div>
    <div class="radio">
      <label class="radio-inline" for="reception">
        <input type="radio" name="reception" value="1"> Yes
        <input type="radio" name="reception" value="0"> No
      </label>
    </div>
    <div class="form-group">
        <label for="address_line_1">Address Line 1</label>
        <input type="text" name="address_line_1" placeholder="Street name and number">
    </div>
    <div class="form-group">
      <label for="address_line_2">Address Line 2 (optional)</label>
      <input type="text" name="address_line_2" placeholder="Apartment number">
    </div>
    <div class="form-group">
      <label for="city">City</label>
      <input type="text" name="city" placeholder="Austin">
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
      <input type="text" name="zipcode" placeholder="78701">
    </div>
    <div class="form-group">
      <label for="comments">Additional Comments</label>
      <textarea name="comments" placeholder="Anything else you'd like to say to us?" rows=10 columns=4></textarea>
    </div>
    <input type="submit" name="submit" value="RSVP">
  </form>

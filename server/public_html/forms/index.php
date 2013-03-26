<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>
			Edit Payment Information - PayPal&trade;
		</title>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
		<script src="js/jquery-validation-1.9.0/jquery.validate.js"></script>
		<script>

		</script>
		<link rel="stylesheet" href="styles.css" />
	</head>
	<body>
		<h1>PayPal&trade;</h1>
		<h2>Edit Your Payment Information</h2>
		<p>A red <em>*</em> indicates a required field.</p>
		<form id="edit_payment_info" action="process_form.php" method="post">
			<input type="hidden" name="form_sent" value="1" />
			
				<div>
					<label for="fname" class="required">First Name</label>
					<input id ="fname" name="fname" type="text"/>
				</div>
				<div>
					<label for="lname" class="required">Last Name</label>
					<input id ="lname" name="lname" type="text"/>
				</div>
				<div>
					<label for="address">Address Line 1</label>
					<input id="address" type="text" name="address" value="" />
				</div>
				<div>
					<label for="address2">Address Line 2</label>
					<input id="address2" type="text" name="address2" value="" />
				</div>
				<div>
					<label for="province">Province</label>
					<select id="province" name="province">
						<option value="choose">choose…</option>
						<option value="AB">Alberta</option>
						<option value="BC">British Colombia</option>
						<option value="ON">Ontario</option>
						<option value="MB">Manitoba</option>
						<option value="NB">New Brunswick</option>
						<option value="NL">Newfoundland</option>
						<option value="NT">Northwest Territories</option>
						<option value="NS">Nova Scotia</option>
						<option value="NV">Nunavut</option>
						<option value="PE">Prince Edward Island</option>
						<option value="PQ">Québec</option>
						<option value="SK">Saskatchewan</option>
						<option value="YK">Yukon Territory</option>
					</select>
				</div>
				<div>
					<label for="phone" class="required">Phone</label>
					<input id="phone" type="tel" name="phone" value="" />
				</div>
				<div>
					<label for="email">Email</label>
					<input id="email" type="email" name="email" value="" size="45" class="required email" />
				</div>

			<fieldset>
				<legend>Credit Card Details</legend>
					<input type="radio" name="cctype" id="amex" value="amex" />
					<label for="amex"><img src="images/amex_logo.gif" alt="American Express" /> American Express</label>
					
					<input type="radio" name="cctype" id="mc" value="mc" />
					<label for="mc"><img src="images/mc_logo.gif" alt="MasterCard" /> MasterCard</label>

					<input type="radio" name="cctype" id="visa" value="visa" />
					<label for="visa"><img src="images/visa_logo.gif" alt="American Express" /> Visa</label>
					
				<div>
					<label for="ccnumber">Credit Card Number</label>
					<input id="ccnumber" type="text" name="ccnumber" value="" />
				</div>
				<div>
					<label for="ccexpireyear">Expiration Year</label>
					<select id="ccexpireyear" name="ccexpireyear">
						<option value="2013">2013</option)>
						<option value="2013">2014</option)>
						<option value="2013">2015</option)>
						<option value="2013">2016</option)>
						
					</select>

				</div>
				<div>
					<label for="ccexpiremonth">Expiration Month</label>
					<select name="ccexpiremonth" id="ccexpiremonth">
						<option value="choose">choose…</option>
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
						<option value="11">11</option>
						<option value="12">12</option>
					</select>
				</div>
			</fieldset>
			
			<fieldset>
				<legend>Keep Me Informed</legend>
				<input type="checkbox" name="marketing[]" id="marketing1" value="newsletter" />
				<label for="marketing1">Newsletter</label>
			</fieldset>
				<input type="submit" value="Save Changes" />
		</form>
	</body>
</html>

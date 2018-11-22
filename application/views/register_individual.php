<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Individual Donor Registrations</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<style>
		h3 {
			color: #43c86a;
		}

	</style>

</head>
<body>
	<div class="container">
	<form action="/donate_now" method="POST">

	    <h3>Yes, I would like to adopt rainforest!</h3>

		<?php
			if (isset($errorsRegister)) {
				echo "<p>" . $errorsRegister . "</p>";	
				echo "<hr>";
			}
		?>

		<?php
			if (isset($success)) {
				echo "<p>" . $success . "</p>";	
			}
		?>

		<div class="donationamount">
			<strong>I would like to adopt:*</strong>
			<fieldset class="form-group">
				<div class="form-check">
		           <input class="form-check-input" type="radio" name="amount" value="1">
		           <label class="form-check-label">
		               1 m2 (€ 2,50)
		           </label>
		       	</div>
		       	<div class="form-check">
		           <input class="form-check-input" type="radio" name="amount" value="4">
		           <label class="form-check-label">
		               4 m2 (€ 10,-)
		           </label>
		       	</div>
		       	<div class="form-check">
		           <input class="form-check-input" type="radio" name="amount" value="10">
		           <label class="form-check-label">
		               10 m2 (€ 25,-)
		           </label>
		       	</div>
		       	<div class="form-check">
		           <input class="form-check-input" type="radio" name="amount" value="20">
		           <label class="form-check-label">
		               20 m2 (€ 50,-)
		           </label>
		       	</div><div class="form-check">
		           <input class="form-check-input" type="radio" name="amount" value="other">
		           <label class="form-check-label">
		              Otherwise, namely: <input type="text" name="amount" placeholder="€">
		           </label>
		       	</div> 
	  		</fieldset>
       	</div>

	    <hr>

		<div class="form-group">
		    <label for="timeframe">Per:</label>
		    <select class="form-control" id="timeframe" name="timeframe">
		    	<option value="month" selected>Month</option>
				<option value="quarter">Quarter</option>
				<option value="year">Year</option>
				<option value="onetime">One-time donation</option>
		    </select>
  		</div>

	    <hr>
		
		<div class="iban form-check">
		    <label class="form-check-label">
		      <input type="checkbox" class="form-check-input" name="iban_agree">
		      Yes, I agree with the automatic bank draft of Adopt Rainforest*
		    </label>

		    <div class="form-group">
			    <input type="iban" class="form-control" id="iban" name="iban" aria-describedby="iban" placeholder="IBAN *">
		  </div>
		</div> 

		<hr>

		<fieldset class="form-group">
		    <h3>Pay Safe</h3>
		    <p><strong>You can pay safe and easy through:</strong></p>
		    <div class="form-check">
		      <label class="form-check-label">
		        <input type="radio" class="form-check-input" name="paymentmethod" id="ideal" value="ideal">
		        iDeal
		      </label>
		    </div>
		    <div class="form-check">
		    <label class="form-check-label">
		        <input type="radio" class="form-check-input" name="paymentmethod" id="creditcard" value="creditcard">
		        Credit Card
		      </label>
		    </div>
		    <div class="form-check">
		    <label class="form-check-label">
		        <input type="radio" class="form-check-input" name="paymentmethod" id="bancontact" value="bancontact">
		        Bancontact
		      </label>
		    </div>
		    <div class="form-check">
		    <label class="form-check-label">
		        <input type="radio" class="form-check-input" name="paymentmethod" id="paypal" value="paypal">
		        PayPal
		      </label>
		    </div>
		    <div class="form-check">
		    <label class="form-check-label">
		        <input type="radio" class="form-check-input" name="paymentmethod" id="sofort" value="sofort">
		        SOFORT
		      </label>
		    </div>
		</fieldset>
		
		<hr>

		<h3>My details</h3>	

		<fieldset class="form-group">
	    	<p><strong>Salutation:</strong></p>
		    <div class="form-check">
	     		<label class="form-check-label">
	        	<input type="radio" class="form-check-input" name="salutation" id="male" value="male">
	        	Mr.
	      		</label>
	    	</div>
		    <div class="form-check">
			    <label class="form-check-label">
		        <input type="radio" class="form-check-input" name="salutation" id="female" value="female">
	        	Mrs.
	      		</label>
	    	</div>
	    </fieldset>
		
		<div class="form-group">
		    <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name*">
		</div>
		<div class="form-group">
		    <input type="text" class="form-control" id="insertion" name="insertion" placeholder="Insertion">
		</div>
		<div class="form-group">
		    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Surname*">
		</div>		

		<label for="DOB">Date of birth:</label> <br>
			<input type="date">
		
		<br>
		<br>

		<div class="form-group">
		    <input type="text" class="form-control" id="street" name="street" placeholder="Street + Number">
		</div>
		<div class="form-group">
		    <input type="text" class="form-control" id="zipcode" name="zipcode" placeholder="Postal/ZIP code">
		</div>
		<div class="form-group">
		    <input type="text" class="form-control" id="location" name="location" placeholder="Location">
		</div>
		<div class="form-group">
		    <input type="email" class="form-control" id="email" name="email" placeholder="Email address*">
		</div>
		<div class="form-group">
		    <input type="password" class="form-control" id="password" name="password" placeholder="Password*">
		</div>
		<div class="form-group">
		    <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm Password*">
		</div>

		<div class="form-group">
    		<textarea class="form-control" id="referral" rows="4" placeholder="How did you find us?"></textarea>
  		</div>

  		<fieldset class="form-group">
		    <h3>Your gift</h3>
		    <p><strong>Did you choose for a periodically donation, then please choose your gift:</strong></p>
		    <div class="form-check">
		      <label class="form-check-label">
		        <input type="radio" class="form-check-input" name="gift" id="toucan" value="toucan">
		        Wonderful high resolution PDF of a watercolor painting (Toucan)
		      </label>
		    </div>
		    <div class="form-check">
		    <label class="form-check-label">
		        <input type="radio" class="form-check-input" name="gift" id="jaguar" value="jaguar">
		        Wonderful high resolution PDF of a watercolor painting (Jaguar)
		      </label>
		    </div>
		    <div class="form-check">
		    <label class="form-check-label">
		        <input type="radio" class="form-check-input" name="gift" id="jaguar" value="jaguar">
		        No, thanks
		      </label>
		    </div>
		</fieldset>

		<div class="donatenow">
			<input class="btn btn-success" type="submit" name="donatenow" value="Donate Now!">
		</div>		

	</form>

</div> <!-- ./div class="container"-->
</body>
</html>



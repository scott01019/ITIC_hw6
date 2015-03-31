<!doctype html>
<html>
    <head>
    	<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">

	    <title>Currency Conversion</title>
	    <link rel='stylesheet' href='css/bootstrap.min.css'>
	    <link rel='stylesheet' href='css/currency-convert.css'>
    </head>
    <body>
    	<div class='container'>
    		<div class='jumbotron'>
    			<h2>Welcome to my Currency Converter</h2>
    			<p class='lead'>
    				Using this little app, you can convert currency values from several of the most prominent currencies used around the world!
    				Valid input includes only positive numbers.
    			</p>
    		</div>

    		<form action='currency_conversion.php' id='form' class='form-horizontal' method='POST'>
    			<div class='form-group'>
    				<div class='col-sm-2'></div>
    				<label for='amount' class='col-sm-2 control-label'>Amount</label>
	    			<div class='col-sm-2'>
	    				<?php
                            //  checks to see if amount is set and sets it if it is
	    					$amount = isset($_POST['amount']) ? $_POST['amount'] : '';
	    					echo "<input type='text' id='amount' name='amount' class='form-control' value='". $amount . "'/>";
	    				?>
		    		</div>
		    		<div class='col-sm-2'>
		    			<select id='from_input' name='from_input' class='form-control'>
		    				<?php require 'from_input.php'; ?>
		    			</select>
		    		</div>
		    	</div>

    			<div class='form-group'>
    				<div class='col-sm-2'></div>
    				<label for='to_input' class='col-sm-2 control-label'>To</label>
    				<div class='col-sm-2'>
    					<?php
                            //  checks to see if amount is set and sets it if it is
    						$result = isset($_POST['result']) ? $_POST['result'] : '';
    						echo "<input class='form-control' id='result' name='result' type='text' value='" . $result . "' disabled>";
    					?>
    				</div>
	    			<div class='col-sm-2'>
	    				<select id='to_input' name='to_input' class='form-control'>
	    					<?php require 'to_input.php'; ?>
	    				</select>
		    		</div>
		    	</div>

    			<div class='form-group'>
    				<div class='col-sm-3'></div>
    				<div class='col-sm-5'>
    					<input type='submit' name='submit' id='convert' class='form-control btn btn-primary' value='Convert'/>
    				</div>
		    	</div>
	    	</form>
	    </div>
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    	<script src='js/bootstrap.min.js'></script>
    </body>
</html>
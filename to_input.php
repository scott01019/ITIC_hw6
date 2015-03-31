<option value='USD' 
	<?php
		//	checks to see if this is the current selected value
		//	sets it as the selected value on the page reload if it is the current selected value
		if (isset($_POST['to_input'])) {
			echo ($_POST['to_input'] == 'USD') ? ' selected="selected"': '';
		}
	?>
>US Dollar</option>

<option value='EUR' 
	<?php
		//	checks to see if this is the current selected value
		//	sets it as the selected value on the page reload if it is the current selected value
		if (isset($_POST['to_input'])) { 
			echo ($_POST['to_input'] == 'EUR') ? ' selected="selected"': '';
		}
	?>
>Euro</option>

<option value='JPY' 
	<?php 
		//	checks to see if this is the current selected value
		//	sets it as the selected value on the page reload if it is the current selected value
		if (isset($_POST['to_input'])) {
			echo ($_POST['to_input'] == 'JPY') ? ' selected="selected"': '';
		}
	?>
>Japanese Yen</option>

<option value='GBP' 
	<?php
		//	checks to see if this is the current selected value
		//	sets it as the selected value on the page reload if it is the current selected value
		if (isset($_POST['to_input'])) { 
			echo ($_POST['to_input'] == 'GBP') ? ' selected="selected"': '';
		}
	?>
>Great British Pound</option>

<option value='CHF' 
	<?php
		//	checks to see if this is the current selected value
		//	sets it as the selected value on the page reload if it is the current selected value
		if (isset($_POST['to_input'])) { 
			echo ($_POST['to_input'] == 'CHF') ? ' selected="selected"': '';
		}
	?>
>Swiss Franc</option>

<option value='CAD' 
	<?php
		//	checks to see if this is the current selected value
		//	sets it as the selected value on the page reload if it is the current selected value
		if (isset($_POST['to_input'])) { 
			echo ($_POST['to_input'] == 'CAD') ? ' selected="selected"': '';
		}
	?>
>Canadian Dollar</option>

<option value='CNY' 
	<?php
		//	checks to see if this is the current selected value
		//	sets it as the selected value on the page reload if it is the current selected value
		if (isset($_POST['to_input'])) { 
			echo ($_POST['to_input'] == 'CNY') ? ' selected="selected"': '';
		}
	?>
>Chinese Yuan</option>
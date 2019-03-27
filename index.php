<html>

	<head>

		<style type="text/css">

		html,body {

			font-family: Verdana;

			font-size: 14px;

		}

		form {

			width: 500px;

			margin: 0 auto;

		}

		label {

			display: block;

			padding: 1em 0;

		}

		label span {

			display: block;

			padding: 0 0 0.5em;

			font-weight: bold;

		}

		input {

			padding: .5em;

			width: 100%;

		}

		input.submit {

			margin: 1em 0;

			cursor: pointer;

		}

		table {

			width: 500px;

			margin: 0 auto;

		}

		table tbody th {

			text-align: left;

		}

		table tbody td {

			text-align: center;

		}

		

		table th, table td {

			padding: 0.75em 0;

		}

		.divider {

			width: 500px;

			height: 1px;

			margin: 1em auto .5em;

			background: #7b8084;

		}

		.footnote {

			display: block;

			width: 500px;

			margin: 0 auto;

			padding: 1em 0;

			font-size: .8em;

		}

		.price { text-align: right; }

		</style>

	</head>

	<body>

	<?php

	$sum = "";

	$pm = 125;

	$dev = 112.5;

	if(isset($_POST['sum'])) :

		$sum = floatval((!empty($_POST['sum']))?$_POST['sum']:0);

		$pm = floatval((!empty($_POST['pm']))?$_POST['pm']:0);

		$dev = floatval((!empty($_POST['dev']))?$_POST['dev']:0);



		$cycleCost = $dev * 5 + $pm;

		$cycles = floor($sum / $cycleCost);

	  

		$pmHours = $cycles;

		$pmSum = $pmHours*$pm;



		$devHours = $cycles*5;

		$devSum = $devHours*$dev;



		$budgetLeft = $sum-($cycles * $cycleCost);

	  

	  ?>

	  <table cellpadding="0" cellspacing="0" border="0">

	  <thead>

		<tr>

			<th>&nbsp;</th>

			<th>Uren</th>

			<th class="price">Bedrag</th>

		</tr>

	  </thead>

	  <tbody>

		<tr>

			<th>DEV</th>

			<td><?php echo $devHours; ?></td>

			<td class="price">&euro; <?php echo number_format( $devSum, 2, ",", "."); ?></td>

		</tr>

		<tr>

			<th>PM</th>

			<td><?php echo $pmHours; ?></td>

			<td class="price">&euro; <?php echo number_format( $pmSum, 2, ",", "."); ?></td>

		</tr>

		<tr>

			<th>TOTAAL</th>

			<td>-</td>

			<td class="price">&euro; <?php echo number_format( ($pmSum+$devSum), 2, ",", "."); ?></td>

		</tr>

		<tr>

			<th>BUDGET OVER</th>

			<td>-</td>

			<td class="price">&euro; <?php echo number_format( $budgetLeft, 2, ",", "."); ?></td>

		</tr>

	  </tbody>

	  </table>

	  <div class="divider"></div>

	  <?php

	endif;

	?>

		<form method="POST" action="">

		<label><span>Totaal bedrag</span>

			<input type="text" name="sum" value="<?php echo $sum; ?>" />

		</label>

		<label><span>PM uurtarief</span>

			<input type="text" name="pm" value="<?php echo $pm; ?>" />

		</label>

		<label><span>Dev uurtarief</span>

			<input type="text" name="dev" value="<?php echo $dev; ?>" />

		</label>

		<input type="submit" name="Submit" value="Bereken" class="submit" />

		</form>

		<span class="footnote">

		Copyright 2019 Never5<br/>

		<br/>

		Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:<br/>

		<br/>

		The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.<br/>

		<br/>

		THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.<br/>

		<br/>

		<a href="https://opensource.org/licenses/MIT">Click here to get a copy of the full MIT license</a>

		</span>

	</body>

</html>


<?php
				$months["  "] = "0"; 
				$months["January"] = "31";
				$months["February"] = "28 days, if leap year 29";
				$months["March"] = "31";
				$months["April" ] = "30";
				$months["May"] = "31";
				$months["June"] = "30";
				$months["July"] = "31";
				$months["August"] = "31";
				$months["September"] = "30";
				$months["October"] = "31";
				$months["November"] = "30";
				$months["December"] = "31";
?>



<!DOCTYPE html>
<html>
<head>
	<title>Month Calculator</title>
</head>
<body>

<style type="text/css">


	body{
	margin: auto;
	font-family: cursive;
	}

	.container{
	border-radius: 8px;
	background-color: #80b3ff; 
	width: 500px;
	height: 450px; 
	margin: auto;
	margin-top: 150px; 
	padding-top: 7px;
	}

	.button {
    border: none;
    background-color: #008CBA;
    color: #ffffff;
    padding: 10px 22px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 8px;
	}

	.button:hover {
    background-color: #ffffff;
    color: #008CBA;
	}

	.select{
	width: 50%;
	height: 25px;
	border-radius: 8px;
	}

	h3{
	color: #ffffff;
	outline-color: #000000;
	}

	h4{
	color: #ffffff;
	}


</style>


	<div class="container" align="center">

	<h3>Month Calculator</h3>
	
	<hr>
	<form method="post">
		<h4>Select Month </h4> 
		<select name="month" class="select">
			<option>
			<?php 
				for($i = 1 ; $i < 14 ; $i++){
					$dateObj   = DateTime::createFromFormat('!m', $i);
					echo '<option>'.strtoupper($dateObj -> format('F')).'</option>';// strtoupper is WORKING!!!
				}
			?>
			</option>
		</select>
		<br><br>
		<input class="button" type="submit" value="Submit" name="submit"/>

		<h4>
			<?php
				if(isset($_POST["submit"])){
					//echo 'shdjd';
					if($_POST["month"] == "February"){
					 	echo "the month of February has 28 days and 29 days in a leap year";
					}else{
						echo  "the month of ". $_POST['month']." has ".$months[$_POST['month']]." days ";
					}
	 			}
			?>
		</h4>

	</form>
		
</body>
</html>

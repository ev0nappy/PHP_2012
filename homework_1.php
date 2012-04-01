<form action="" method="get">
number: <input type="text" name="number" />
<input type="submit" number="submit" />
</form> 
<?php
if (empty($_GET)) 
{
    // no data passed by get
}
else
{
	$number = $_GET['number'];
	if (is_numeric($number) == false)
	{
		echo "<font color='red'>The parameter is not a number</font>";
	}

	else
	{
		if ($number < 0 || $number >= 19999)
		{
			echo "<font color='red'>The parameter is not within the range [0,19999]<br/></font>";
		}

		$IsPrimeBool = true;
		for ($i = 2; $i <= $number/2; $i++)
		{
			if ($number%$i == 0)
			{
				$IsPrimeBool = false;
				break;
			}
		}
		if ($IsPrimeBool == true)
		{
			echo "<font color='black'>The number $number is prime !<br/></font>";
		}
		else
		{
			echo "<font color='blue'>The number $number is NOT prime !<br/></font>";
		}
	}
}
?>

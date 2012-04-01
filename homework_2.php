<?php
$Numbers = range(20,1000,37);
function find_3_prime()
{
	global $Numbers;
	$counter = 0;
	foreach ($Numbers as $value)
	{
		$IsPrimeBool = true;
		for ($i = 2; $i <= $value/2; $i++)
		{
			if ($value%$i == 0)
			{
				$IsPrimeBool = false;
				break;
			}
		}
		if ($IsPrimeBool == true)
		{
			$counter++;
			if($counter == 3)
			{
				echo $value.'<br/>';
				break;
			}
		}
	}
}
function check_exists()
{
	global $Numbers;
	$arr = array(146,284,871);
	foreach ($arr as $value)
	{
		if (in_array($value,$Numbers,false))
		{
			echo "The number $value exist in the array".'<br/>';
		}
		else
		{
			echo "The number $value does not exist in the array".'<br/>';
		}
	}
}
find_3_prime();
check_exists();
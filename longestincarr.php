<?php
$arr = array(564, 344, 872, 953, 647,2398, 4234, 467, 5892, 73638);
$n = sizeof($arr);

function LongestIncArr($arr, $n)
{
	$max = 1;
	$len = 1;
	$maxIndex = 0;
	
	for ($i = 1; $i < $n; $i++)
	{
		
		if ($arr[$i] > $arr[$i - 1])
			$len++;
		else
		{
			
			if ($max < $len)
			{
				$max = $len;
				$maxIndex = $i - $max;
			}
				
			$len = 1;
		}
	}
	
	
	if ($max < $len)
	{
		$max = $len;
		$maxIndex = $n - $max;
	}

	for ($i = $maxIndex;
		$i < ($max + $maxIndex); $i++)
		echo($arr[$i] . " ") ;
		
}

LongestIncArr($arr, $n);
	

?>
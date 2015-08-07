<?php
	/*$time =time();
	$endtime=time()+10;
	$done= true;
	echo "$time <br>";
	echo $endtime;*/
	function trya()
	{
		set_time_limit(10);
		exec("gcc test.c -o test 2>&1",$output);
		if($output)
		{
			foreach($output as $o)
			echo "$o <br>";
		}
		else
		{
			exec("timeout 1 ./test 2>&1",$output,$returnval);
			foreach($output as $o)
			echo "$o <br>";
		}
		return $returnval;
	}

	$a=trya();
	if($a == 124)
	{
		echo "There may be an infinite loop or your prog takesmore than 5 secs";	
	}
	else if($a == 136)
	{
		echo "Runtime Exception";
	}
?>

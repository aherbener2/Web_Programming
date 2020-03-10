<html>
<body>
<?php
function isValidDate($birthday)
{
	if(is_numeric(substr($birthday,0,2)))
	{
		if(substr($birthday,2,1)=='/')
		{
			if(is_numeric(substr($birthday,3,2)))
			{
				if(substr($birthday,5,1)=='/')
				{
					if(is_numeric(substr($birthday,6,4)))
					{
						return true;
					}
				}
			}
		}
	}
	else
	{
		return false;
	}
}
function flsValidRange($age,$min,$max)
{
	if(is_numeric($age))
	{
		if($age>=$min&&$age<=max)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	else
	{
		return false;
	}
}
function flsValidZipcode($zip)
{
	if(is_numeric($zip)&&(strlen($zip)==5))
	{
		return true;
	}
	else
	{
		return false;
	}
}
?>
</body>
</html>
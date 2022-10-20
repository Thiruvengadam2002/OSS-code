<html>
<head>
	<title> second </title>
</head>
<body>
<?php
function CheckNumber($x) {
  if ($x > 0)
    {$message = "Positive number";}
  elseif ($x == 0)
    {$message = "Zero";}
  else
    {$message = "Negative number";}
  echo $message."\n";
}

CheckNumber(-5.5);
CheckNumber(-10.8);
?>
</body>
</html>
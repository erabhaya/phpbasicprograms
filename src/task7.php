<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chess</title>
    <style>
        table{
            width: 600px; height: 600px;
        }
    </style>
</head>
<body>
<table>
<?php
for($r=1;$r<=8;$r++)
{
	echo "<tr>";
	for($c=1;$c<=8;$c++)
	{
		$total=$r+$c;
		if($total%2==0)
		{
			echo "<td height=35px width=30px bgcolor=black></td>";
		}
		else
		{
			echo "<td height=35px width=30px bgcolor=white></td>";
		}
	}
	echo "</tr>";
}
?>
</table>

</body>
</html>
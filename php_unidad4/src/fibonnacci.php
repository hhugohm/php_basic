<html>
	<head>
		<title>Fibonacci sequence</title>
			<link rel="stylesheet" type="text/css" href="common.css"   />
	</head>

<body>
<h2>Fibonacci sequence</h2>
<?php
$iteraciones=10;
$num1=0;
$num2=1;
$sum=0;
echo "<table>
	<tr>
		<td>Sequence#  </td>
		<td>Value      </td>
	</tr>";
for($i=0;$i<= $iteraciones;$i++){
	if($i==0){
		$num2=0;
	}
	if($i==1){
		$num2=1;
	}else{
		$sum=$num1+$num2;
		$num1=$num2;
		$num2=$sum;
	}
	
echo "<tr>
		<td>F<sub>$i</sub></td>
		<td>$num2</td>
	</tr>";
}

echo "</table>";



?>

</body>
</html>
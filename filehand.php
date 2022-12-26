 <?php
$myfile = fopen("fop.txt", "r") or die("Unable to open file!");
$table = '<table>';
while(!feof($myfile)) {
	$row = '<tr>';
	for($i=1;$i<=4;$i++){
		$row .= '<td>' . trim(fgets($myfile)) . '</td>';

	}
	$table .=$row. '</tr>';
	}
	$table .= '</table>';
	echo $table;
	fclose($myfile);
?>  


  
	
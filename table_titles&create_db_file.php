<?php
	$databases = fopen("databases.txt", 'a+');
	
	if(!empty(file("databases.txt"))) {
		echo 'Файл "databases.txt" не пустой';
		while(!feof($databases)) {
		    $str = htmlentities(fgets($databases));
			$arr = explode(" ", $str);
			echo "<tr>";
				echo "<td>$arr[0]</td>";
				echo "<td>$arr[1]</td>";
				echo "<td>$arr[2]</td>";
				echo "<td>$arr[3]</td>";
				echo "<td>$arr[4]</td>";
			echo "</tr>";
		}
	} else {
		echo 'Файл "databases.txt" пустой';
	}
	
	fclose($databases);
?>
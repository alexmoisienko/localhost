<?php
	if (isset($_POST["go"])) {				// 1 if (нажата ли кнопка)
	    if (!empty($_POST["num"])){				// 2 if with else (не пусто ли поле "номер листа")
			$databases = fopen("databases.txt", 'a+');	// открываем файл "databases.txt"
			
			$arr_old = file('databases.txt');
			
				if (!empty($arr_old)) {
					echo 'Файл "databases.txt" не пустой';
				} else {
					echo '"Файл "databases.txt" пустой"';
				}
			
			$num = "не_определено";
			$prm1 = "не_определено";
			$prm9 = "не_определено";
			$prm11 = "Нет";
			$prm8 = "не_определено";
			
			if(!empty($_POST["num"])){
				$num = $_POST["num"];
			}
			
			if(!empty($_POST["prm1"])){
				$prm1 = $_POST["prm1"];
			}
			
			if(!empty($_POST["prm9"])){
				$prm9 = $_POST["prm9"];
			}
			
			if(!empty($_POST["prm11"])){
				$prm11 = $_POST["prm11"];
			}
			
			if(!empty($_POST["prm8"])){
				$prm8 = $_POST["prm8"];
			}
				
			$data = [
				0 => "$num",
				1 => "$prm1",
				2 => "$prm9",
				3 => "$prm11",
				4 => "$prm8"];
		
			$data_str = implode(' ', $data);

			if(!empty(file("databases.txt"))) {		// 3 if (не пуст ли файл "databases.txt")
				fwrite($databases, "\n");
			}
			
			file_put_contents('databases.txt', $data_str, FILE_APPEND);	// добавляем строку с записями

			fclose($databases);			// закрываем файл 'databases.txt'
	    } else {						// 2 else
			echo "Введите номер листа!";
		} 							// 2 end
	}							// 1 end
?>
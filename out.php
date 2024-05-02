
	<?php
	if (isset($_POST["go"])) {
		$prm1 = "не определено";
		$prm2 = "не определено";
		$prm3 = "не определено";
		$prm4 = "не определено";
		$prm5 = "не определено";
		$prm6 = "не определено";
		$prm7 = "не определено";
		$prm8 = "не определено";
		$prm9 = "не определено";
		$prm10 = "не определено";
		$prm11 = "нет";
		$prm12 = "нет";
		$prm13 = "не определено";
		$prm14 = "не определено";
		$prm15 = "не определено";
		$prm16 = "не определено";
		if(!empty($_POST["prm1"])){
  
		    $prm1 = $_POST["prm1"];
		}
		if(!empty($_POST["prm2"])){
		  
		    $prm2 = $_POST["prm2"];
		}
		if(!empty($_POST["prm3"])){
		  
		    $prm3 = $_POST["prm3"];
		}
		if(!empty($_POST["prm4"])){
		  
		    $prm4 = $_POST["prm4"];
		}
		if(!empty($_POST["prm5"])){
		  
		    $prm5 = $_POST["prm5"];
		}
		if(!empty($_POST["prm6"])){
		  
		    $prm6 = $_POST["prm6"];
		}
		if(!empty($_POST["prm7"])){
		  
		    $prm7 = $_POST["prm7"];
		}
		if(!empty($_POST["prm8"])){
		  
		    $prm8 = $_POST["prm8"];
		}
		if(!empty($_POST["prm9"])){
		  
		    $prm9 = $_POST["prm9"];
		}
		if(!empty($_POST["prm10"])){
		  
		    $prm10 = $_POST["prm10"];
		}
		if(!empty($_POST["prm11"])){
		  
		    $prm11 = $_POST["prm11"];
		}
		if(!empty($_POST["prm12"])){
		  
		    $prm12 = $_POST["prm12"];
		}
		if(!empty($_POST["prm13"])){
		  
		    $prm13 = $_POST["prm13"];
		}
		if(!empty($_POST["prm14"])){
		  
		    $prm14 = $_POST["prm14"];
		}
		if(!empty($_POST["prm15"])){
		  
		    $prm15 = $_POST["prm15"];
		}
		if(!empty($_POST["prm16"])){
		  
		    $prm16 = $_POST["prm16"];
		}
		echo "Название рецепта: $prm1 <br>" ;
		echo "Дата создания: $prm2 <br>" ;
		echo "Сложность: $prm3 <br>" ;
		echo "Продукт №1: $prm4 <br>" ;
		echo "Продукт №2: $prm5 <br>" ;
		echo "Продукт №3: $prm6 <br>" ;
		echo "Кол-во продукта №1: $prm7 <br>" ;
		echo "Кол-во продукта №2: $prm8 <br>" ;
		echo "Кол-во продукта №3: $prm9 <br>" ;
		echo "Фото блюда: $prm10 <br>" ;
		echo "Наличие сахара: $prm11 <br>" ;
		echo "Наличие соли: $prm12 <br>" ;
		echo "Имя: $prm13 <br>" ;
		echo "Фамилия: $prm14 <br>" ;
		echo "Эл. почта: $prm15 <br>" ;
		echo "Способ приготовления: $prm16 <br>" ;
	}
	?>
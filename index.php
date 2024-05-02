<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>
			Рецепт
		</title>
        <style>
	    h2 {
		position: absolute;
		left: 370px;
		}
            .name {
    		position: absolute;
		top: 60px;
		width: 210px;
		padding-left: 10px;
		padding-bottom: 1px;
		border-top: 1px solid #000;
                border-bottom: 1px solid #000;
		border-left: 1px solid #000
		}
            .cheet_num {
    		position: absolute;
		top: 60px;
		width: 170px;
		left: 229px;
		padding-left: 10px;
		padding-bottom: 1px;
		border-top: 1px solid #000;
                border-bottom: 1px solid #000;
		border-left: 1px solid #000;
		border-right: 1px solid #000;
		}
	    .date {
		position: absolute;
		width: 200px;
		top: 60px;
		left: 410px;
		padding-left: 10px;
		padding-bottom: 2px;
		text-align: left;
		border-top: 1px solid #000;
                border-bottom: 1px solid #000
		}
	    .complexity {
		position: absolute;
		top: 60px;
		left: 440px;
		width: 341px;
		padding-right: 10px;
		text-align: right;
		border-right: 1px solid #000;
		border-top: 1px solid #000;
                border-bottom: 1px solid #000
		}
	    .products {
		position: absolute;
		top: 132px;
		width: 240px;
		padding-left: 10px;
		border-left: 1px solid #000;
		border-bottom: 1px solid #000
		}
	    .products_values {
		position: absolute;
		top: 134px;
		left: 190px;
		width: 209.5px;
		padding-left: 10px;
		padding-bottom: 1px;
		border-bottom: 1px solid #000;
		border-right: 1px solid #000
		}
	    .photo {
		position: absolute;
		top: 133px;
		left: 410px;
		height: 111px;
		width: 381px;
		text-align: center;
		padding-top: 50px;
		border-right: 1px solid #000;
		border-bottom: 1px solid #000
		}
	    .sugar_salt {
		position: absolute;
		top: 295px;
		width: 401px;
		text-align: center;
		border-left: 1px solid #000;
		border-right: 1px solid #000;
		border-bottom: 1px solid #000;
		}
	    .user {
		position: absolute;
		top: 368px;
		width: 401px;
		text-align: center;
		padding-top: 20px;
		border-left: 1px solid #000;
		border-right: 1px solid #000;
		border-bottom: 1px solid #000;
		}
	    .button {
		position: absolute;
		top: 550px;
		width: 401px;
		text-align: center;
		border-left: 1px solid #000;
		border-right: 1px solid #000;
		border-bottom: 1px solid #000;
		}
	    .cooking_method {
		position: absolute;
		top: 295px;
		left: 410px;
		height: 288px;
		width: 366px;
		padding-top: 20px;
		padding-left: 15px;
		border-right: 1px solid #000;
		border-bottom: 1px solid #000;
		}
	    #textfield {
		height: 230px;
		width: 350px;
		resize: none;
		}
	    .out {
		position: absolute;
		top: 620px;
		}
        </style>
    </head>
    <body>
		<form action="index.php" name="form1" method="post">
			<h2>Рецепт</h2>
			<div class="name">
				<p>
					<LEFT>Название рецепта:<br><input type="text" name="prm1" size="18"
					value="<?php if (isset($_POST['prm1'])) echo $_POST['prm1'] ?>" />
				</p>
			</div>
			<div class="cheet_num">
				<p>
					Номер листа:<br><input type="text" name="num" size="18"
					value="<?php if (isset($_POST['num'])) echo $_POST['num'] ?>" />
				</p>
			</div>
			<div class="date">
				<p>
					Дата создания:<br><input type="date" name="prm2"
					value="<?php if (isset($_POST['prm2'])) echo $_POST['prm2'] ?>" />
				</p>
			</div>
			<div class="complexity">
				<p>
					Сложность:<br>1<input type="range" name="prm3" min="1" max="5" step="1" 
					value="<?php if (isset($_POST['prm3'])) echo $_POST['prm3'] ?>">5
				</p>
			</div>
			<div class="products">
				<p>
					Продукты:
				</p>
				<p>
					<input type="text" name="prm4" size="18"
					value="<?php if (isset($_POST['prm4'])) echo $_POST['prm4'] ?>" />
				</p>
				<p>
					<input type="text" name="prm5" size="18"
					value="<?php if (isset($_POST['prm5'])) echo $_POST['prm5'] ?>" />
				</p>
				<p>
					<input type="text" name="prm6" size="18"
					value="<?php if (isset($_POST['prm6'])) echo $_POST['prm6'] ?>" />
				</p>
			</div>
			<div class="products_values">
				<p>
					&nbsp;
				</p>
				<p>
					1шт<input type="range" name="prm7" min="1" max="10" step="1"
					value="<?php if (!empty($_POST['prm7'])) echo $_POST['prm7'] ?>">10шт
				</p>
				<p>
					<select name="prm8">
						<option value="0.1"
						<?php if (!empty($_POST['prm8']) and $_POST['prm8'] === '0.1') {echo 'selected';} ?>>0.1
						</option>
						<option value="0.2"
						<?php if (!empty($_POST['prm8']) and $_POST['prm8'] === '0.2') {echo 'selected';} ?>>0.2
						</option>
						<option value="0.3"
						<?php if (!empty($_POST['prm8']) and $_POST['prm8'] === '0.3') {echo 'selected';} ?>>0.3
						</option>
						<option value="0.4"
						<?php if (!empty($_POST['prm8']) and $_POST['prm8'] === '0.4') {echo 'selected';} ?>>0.4
						</option>
						<option value="0.5"
						<?php if ((!empty($_POST['prm8']) and $_POST['prm8'] === '0.5') or (empty($_POST['prm8']))) {echo 'selected';} ?>>0.5
						</option>
					</select>&nbsp;литра
				</p>
				<p>
					<input type=radio name="prm9" value="100гр"
					<?php if (!empty($_POST['prm9']) and $_POST['prm9'] === '100гр') {echo 'checked';} ?>>100гр
					<input type=radio name="prm9" value="500гр"
					<?php if (!empty($_POST['prm9']) and $_POST['prm9'] === '500гр') {echo 'checked';} ?>>500гр
					<input type=radio name="prm9" value="1000гр"
					<?php if (!empty($_POST['prm9']) and $_POST['prm9'] === '1000гр') {echo 'checked';} ?>>1000гр
				</p>
			</div>
			<div class="photo">
				<p>Фото блюда:&nbsp;<input type="file" name="prm10" accept="image/jpeg"></p>
			</div>
			<div class="sugar_salt">
				<p>
					<input type="hidden" name="prm11">
					<input type="checkbox" name="prm11" value="Да"
					<?php if (isset($_POST['prm11']) and $_POST['prm11'] === 'Да') echo 'checked'; ?>>Соль<br>
					<input type="hidden" name="var12">
					<input type="checkbox" name="prm12" value="Да"
					<?php if (isset($_POST['prm12']) and $_POST['prm12'] === 'Да') echo 'checked'; ?>>Сахар
				</p>
			</div>
			<div class="user">
				<p>
					Пользователь:
				</p>
				<p>
					<input type="text" name="prm13" size="18" placeholder="Имя"
					value="<?php if (isset($_POST['prm13'])) echo $_POST['prm13'] ?>" />
				</p>
				<p>
					<input type="text" name="prm14" size="18" placeholder="Фамилия"
					value="<?php if (isset($_POST['prm14'])) echo $_POST['prm14'] ?>" />
				</p>
				<p>
					<input type="email" name="prm15" size="18" placeholder="Эл. почта"
					value="<?php if (isset($_POST['prm15'])) echo $_POST['prm15'] ?>" />
				</p>
			</div>
			<div class="button">
				<p>
					<input type="submit" name="go" value="Отправить">&emsp;
					<input type="reset" name="reset" value="Очистить">
				</p>		
			</div>
			<div class="cooking_method">
				Способ приготовления:<br><textarea name="prm16" id="textfield"><?= $_POST['prm16'] ?? '' ?></textarea>
			</div>

			<div class="out">
				<table border="1">
					<tr>
						<td>Номер листа</td>
						<td>Название рецепта</td>
						<td>Количество грамм</td>
						<td>Наличие соли</td>
						<td>Количество литров</td>
					</tr>
					<?php
						include 'table_titles&create_db_file.php'
					?>
				</table>
			</div>
			<?php
				include 'run_submit.php'
			?>
		</form>
    </body>
</html>
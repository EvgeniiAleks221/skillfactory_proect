<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Страничка радости </title>
	<link rel="stylesheet" href="style.css" />
</head>
<body>

	<div class="flex-container">

		<div class="header">
				<?php include 'logo.inc.php' ?>
				<?php include 'menu.inc.php' ?>
		</div>

		<div class="about_me">

		  <h1> <?php echo $p ?> </h1>

		    <div class="data">
		    	<div class="myImg">
		    		<?php
		    		echo '<img=src="img/php.jpg">';
		    		?>
		    	</div>

		    	<div class="fullname">
		    		<p> Меня зовут
		    		<?php echo $name, ' ', $surname . '<br>';
		    			  echo "Я из города", ' ', $city; ?>
		    		</p>

		    		<p> Мне
		    		<?php echo $age; ?>
		    		лет </p>
		    		<p> Мои навыки:</p>
		    		<ol>
		    			<li> Я научился создавать переменные </li> 
		    			<br>
		    			<li> Изучил простые операции с ними </li>
		    		</ol>
		    	</div>
		    </div>

		    <div class="knowledge">

		    		<?php include 'knowledge.inc.php'; ?>
		    		<?php
		    		echo $a, ' ', $b, ' ', $c;
		    		?> <br>

		    		<?php
		    			$a = 10;
		    			$b = 20;
		    			$c = $a + $b;
		    			echo $c;
		    		?> <br>
		    		 <?php
		    		 	echo $d;
		    		?>

		    </div>

		    <div class="article">
		    	<p class="text">
		    		Я учусь на курсе "Белый хакер". 
		    		Мне нравится овладевать новыми навыками и изучать программы. 
		    		Сейчас я создаю сайт-визитку. Это мой увлекательный опыт.
		    	</p>
		    </div>
		</div>

			<?php include 'footer.inc.php' ?>

	</div>


</body>
</html>
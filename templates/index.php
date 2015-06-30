<?php include "templates/header.php" ?>

<?php if(isset($your_choice)) { ?>
	Your choice: <?=$your_choice['name'] ?><br>
	Computer choice: <?=$computer_choice['name'] ?><br>
	<h1><?=$result?></h1>
<?php } ?>

<form method="POST">

<?php 
	foreach ($elements as $key => $value) { ?>
		
	<div class="radio">
		<label> <input type="radio" name="user_choice" value='<?=$key?>'> <?=$value['name'] ?> </label> 
	</div>

<?php } ?>

	<input type="submit" value="OK" class="btn btn-success">

</form>

<?php include "templates/footer.php" ?>


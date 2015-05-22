<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>ROCK-SCISSORS-PAPER</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">KNB</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <!-- <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
      </ul> -->
      <ul class="nav navbar-nav navbar-right">
        <?php if (!signed_in()) { ?>

                <li><a href="sign_up.php">Sign up</a></li>
                <li><a href="sign_in.php">Sign in</a></li>

        <?php } else { ?>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?=$_SESSION['signed_in']['name']?>
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="edit_name.php">edit name</a></li>
                      <li><a href="edit_password.php">edit password</a></li>
                    </ul>
                  </li>          
                  <li><a href="sign_out.php">Sign out</a></li>
        <?php } ?>

      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<?php
  $msg = get_message();
?>

<?php if ($msg){ 
  foreach ($msg as $message) {  ?> 

  <div class="container">
    <div class="alert alert-<?=$message['type'] ?>" role="alert"> <?=$message['message'] ?> </div>
  </div>

<?php } } ?>


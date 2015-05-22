<?php include "templates/header.php" ?>

<div class="container">
  <form method="POST" action="sign_in.php">
    <div class="form-group">
      <label>Email address</label>
      <input type="email" class="form-control" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label>Password</label>
      <input type="password" class="form-control" placeholder="Password" name="password">
    </div>
    <button type="submit" class="btn btn-default">Sign in</button>
  </form>
  <a href="change_password.php">retrieve password</a>
</div>

<?php include "templates/footer.php" ?>
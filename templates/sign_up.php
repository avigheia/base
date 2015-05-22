<?php include "templates/header.php" ?>

<div class="container">
  <form method="POST" action="sign_up.php">
    <div class="form-group">
      <label class="control-label" >Name</label>
      <input type="text" class="form-control" placeholder="Enter your name" name="name">
    </div>
    <div class="form-group">
      <label>Email address</label>
      <input type="email" class="form-control" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label>Password</label>
      <input type="password" class="form-control" placeholder="Password" name="password">
    </div>
    <div class="form-group">
      <label>Reapeat password</label>
      <input type="password" class="form-control" placeholder="Password" name="rep_password">
    </div>
    <button type="submit" class="btn btn-default">Sign up</button>
  </form>
</div>

<?php include "templates/footer.php" ?>
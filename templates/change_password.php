<?php include "templates/header.php" ?>

<div class="container">
  <form method="POST" action="change_password.php">
    <div class="form-group">
      <label>Email address</label>
      <input type="email" class="form-control" placeholder="Enter email" name="email">
    </div>
    <button type="submit" class="btn btn-default">Sign in</button>
  </form>
</div>

<?php include "templates/footer.php" ?>
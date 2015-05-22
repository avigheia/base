<?php include "templates/header.php"; ?>

<div class="container">
  <form method="POST" action="edit_password.php">
    <div class="form-group">
      <label>Your password</label>
      <input type="password" class="form-control" name="password">
    </div>
    <div class="form-group">
      <label>New password</label>
      <input type="password" class="form-control" name="password_new">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

<?php include "templates/footer.php" ?>
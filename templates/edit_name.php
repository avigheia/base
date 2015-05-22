<?php include "templates/header.php"; ?>

<?php $name = $_SESSION['signed_in']['name']; ?>

<div class="container">
  <form method="POST" action="edit_name.php">
    <div class="form-group">
      <label>Edit name</label>
      <input type="text" class="form-control" value="<?=$name?>" name="name">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

<?php include "templates/footer.php" ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="container">
      <p>Confirm: Deleting <?= htmlentities($row['TName']) ?></p>
      <p>ssssss</p>
      <form method="post">
        <input type="hidden" name="id" value="<?= $row['id'] ?>">
        <input type="submit" value="Delete" name="delete">
        <a href="viewfeed.php">Cancel</a>
      </form>
    </div>

</body>
</html>
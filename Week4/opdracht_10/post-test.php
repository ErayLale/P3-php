<!DOCTYPE html>
<html>
<body>

  <form method="POST" action="post-test.php">
    <input type="text" name="titel">
    <button type="submit">Verstuur</button>
  </form>

  <?php
    print_r($_POST);
    echo $_POST['titel'];
  ?>

</body>
</html>
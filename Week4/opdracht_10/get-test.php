<!DOCTYPE html>
<html>
<body>

  <form method="GET" action="get-test.php">
    <input type="text" name="titel">
    <button type="submit">Verstuur</button>
  </form>

  <?php
    print_r($_GET);
    echo $_GET['titel'];
  ?>

</body>
</html>
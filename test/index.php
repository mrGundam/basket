<?php

?>

<!DOCTYPE html>
<html lang="<?php echo $language; ?>">
  <head>
    <meta charset="UTF-8">
    <title>MAMP</title>
  </head>
  <body>
  <?php 
  //phpinfo();
  //echo $_SERVER['HTTP_USER_AGENT'];
   ?>
<?php
if (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0') !== FALSE) {
?>

<?php
} else {
?>

<?php
}
?>

<form action="action.php" method="post">
 <p>이름: <input type="text" name="name" /></p>
 <p>나이: <input type="text" name="age" /></p>
 <p><input type="submit" /></p>
</form>
  </body>
</html>
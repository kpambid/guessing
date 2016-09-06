<?php
$number = rand(1,10);
?>
<html>
<h2>Higher Or Lower Game</h2>
<form action="game.php" method="POST">
  <input type="hidden" value="0" name="score">
  <input type="hidden" value="<?php echo $number;?>" name="number">
  <input type="submit" value="Click to play">
</form>
<?php
$number = $_POST['number'];
$score =- $_POST['score'];
 
echo "The number is: $number
<p>
<form action='logic.php' method='POST'>
	<input type='hidden' value='$number' name='number'>
	<input type='hidden' value='$score' name='score'>
	<input type='submit' value='Higher' name='option'>
</form>
 
<form action='logic.php' method='POST'>
	<input type='hidden' value='$number' name='number'>
	<input type='hidden' value='$score' name='score'>
	<input type='submit' value='Lower' name='option'>
</form>
<p>
<Current Score: $score
";
 
?>
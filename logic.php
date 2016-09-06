<?php
$option = $_POST['option'];
if($option == "Higher")
{
	$score = $_POST['score'];
	$number = $_POST['number'];
	$new_number = rand(1,10);
 
	if($new_number >= $number)
	{
		$new_score = $score + 1;
		echo "The number was higher
                         <form action='game.php' method='POST'>
			 <input type='hidden' value='$new_number' name='number'>
         		 <input type='hidden' value='$new_score' name='score'>
         		 <input type='submit' value=''Click here to continue'>
                         </form>";
 	}
	else
	{
		die("The number was: $number <br>
                        The new number is: $new_number <p>
                        Sorry the number was lower<br>
			<a href='index.php'>Click here to play again</a>");
 
 
	}
 
  }
$option = $_POST['option'];
 
if($option == "Lower")
{
	$score = $_POST['score'];
	$number = $_POST['number'];
	$new_number = rand(1,10);
 
	if($new_number <= $number)
	{
		$new_score = $score + 1;
		echo "The number was lower
                         <form action='game.php' method='POST'>
			 <input type='hidden' value='$new_number' name='number'>
         		 <input type='hidden' value='$new_score' name='score'>
         		 <input type='submit' value=''Click here to continue'>
                         </form>";
 	}
	else
	{
		die("The number was: $number <br>
                        The new number is: $new_number <p>
                        Sorry the number was higher<br>
			<a href='index.php'>Click here to play again</a>");
 
 
	}
 
  }
?>
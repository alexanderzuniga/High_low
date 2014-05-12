<?php


define('LOWEND', 1);
define('TOPEND', 100);

//  game picks a random number between 1 and 100.
$comp_pick = mt_rand(LOWEND, TOPEND);




	
do {
	fwrite (STDOUT, 'Pick a number between ' . LOWEND . ' and ' . TOPEND . '. ');

	$player_guess = fgets(STDIN);


	echo $player_guess;

		if ($player_guess < $comp_pick) {
			// - if user's guess is less than the number, STDOUT "HIGHER"
			fwrite(STDOUT, "HIGHER!!! \n");
		} 
		elseif ($player_guess > $comp_pick) {
			// - if user's guess is more than the number, STDOUT "LOWER"
			fwrite(STDOUT, "LOWER!!! \n");
		} 
		elseif ($player_guess == $comp_pick) {
			// - if a user guesses the number, STDOUT "GOOD GUESS!"
			fwrite(STDOUT, "WINNER!!! \n");
			exit(0);
		} 
	}   while ($player_guess != $comp_pick);













?>
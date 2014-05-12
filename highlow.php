<?php
//Limit to enter file name and two numbers. 
if($argc != 3){
	echo "Must enter \"php highlow.php\" and two different numbers to begin.\n";
	exit(1);
} 
// Limit entries to being only numbers. 
if (!is_numeric($argv[1]) || !is_numeric($argv[2])) {
	echo "I have no idea what you\'re talking about! Enter two NUMBERS!\n"; 
	exit(1);
}

// Allowing greater or lesser number to be entered in any order
if ($argv[1] < $argv[2]) { 
	define('LOWEND', (int)$argv[1]);
	define('TOPEND', (int)$argv[2]);
} elseif ($argv[1] > $argv[2]) {
	define('LOWEND', (int)$argv[2]);
	define('TOPEND', (int)$argv[1]);
} else {
	echo "Must enter two different numbers to begin.\n";
	exit(1);
}

//  game picks a random number between 1 and 100.
$comp_pick = mt_rand(LOWEND, TOPEND);
// Number of counts
$counts = 0;
//Initial Message
fwrite (STDOUT, 'What is your name? ');

$name = trim (fgets(STDIN));

fwrite (STDOUT, 'Let us begin ' . $name . '! '. PHP_EOL);

fwrite (STDOUT, 'Pick a number between ' . LOWEND .  ' and ' .  TOPEND . '! ');

//Run Program
do {

	$player_guess = fgets(STDIN);
	$counts++;

	if ($player_guess < $comp_pick) {
		fwrite(STDOUT, "HIGHER!!! Guess Again. \n");
	} elseif ($player_guess > $comp_pick) {
		fwrite(STDOUT, "LOWER!!! Guess Again. \n");
	
	} elseif ($player_guess == $comp_pick) {
		fwrite(STDOUT, "WINNER!!! It took you {$counts} guesses to get it right! \n");
		exit(0);
	} 
}   while ($player_guess != $comp_pick);

?>
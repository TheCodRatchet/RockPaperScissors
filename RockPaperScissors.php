<?php

$playerChoice = (int) readline("Welcome to the game Rock-Paper-Scissors. You will be playing against Computer. Please choose number of your choice - 1 (Rock) / 2 (Paper) / 3 (Scissors): ");
$aiChoice = rand(1, 3);

if ($playerChoice !== 1 && $playerChoice !== 2 && $playerChoice !== 3){
    echo "Invalid input, please put in number - 1 (Rock) / 2 (Paper) / 3 (Scissors)" . PHP_EOL;
}

if ($playerChoice == $aiChoice && $playerChoice == 1){
    echo "It's tie! Make a fist bump." . PHP_EOL;
} else if ($playerChoice == $aiChoice && $playerChoice == 2){
    echo "It's tie! Make a High five." . PHP_EOL;
} else if ($playerChoice == $aiChoice && $playerChoice == 3) {
    echo "It's tie! Scissor each other." . PHP_EOL;
}

if ($playerChoice == 1 && $aiChoice == 3){
    echo 'Player has won! Put Your fist into monitor.' . PHP_EOL;
} else if ($playerChoice == 2 && $aiChoice == 1){
    echo 'Player has won! Slap Your computer.' . PHP_EOL;
} else if ($playerChoice == 3 && $aiChoice == 2){
    echo 'Player has won! Cut any cable.' . PHP_EOL;
}

if ($aiChoice == 1 && $playerChoice == 3){
    echo 'Computer has won! Kids will throw rocks at your window today.' . PHP_EOL;
} else if ($aiChoice == 2 && $playerChoice == 1){
    echo 'Computer has won! Your printer will start to launch paper at You.' . PHP_EOL;
} else if ($aiChoice== 3 && $playerChoice == 2){
    echo 'Computer has won! DANGER! Bowl cut inc.' . PHP_EOL;
}
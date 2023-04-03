<?php

// Define arrays of random messages for each option
$walkMessages = [
    "You walk for an hour and find nothing of interest.",
    "You come across a group of hungry zombies. You manage to escape by running.",
    "You find an abandoned can of food. You take it and continue on your way.",
];

$foodMessages = [
    "You search houses and stores, but find nothing to eat.",
    "You find an abandoned vegetable garden. You gather some vegetables for your next meal.",
    "You come across a group of hungry zombies while searching a supermarket. You manage to escape by running, but you didn't find any food.",
];

$shelterMessages = [
    "You find an abandoned house and decide to settle in for the night.",
    "You search for shelter for hours, but find nothing suitable.",
    "You come across a group of survivors who welcome you with open arms into their shelter.",
];

// Function to start the game
function startGame()
{
    echo "Welcome to Walking Dead game!" . PHP_EOL;
    echo "Choose an option:" . PHP_EOL;
    echo "1. Go for a walk" . PHP_EOL;
    echo "2. Look for food" . PHP_EOL;
    echo "3. Find shelter" . PHP_EOL;
    echo "4. Quit the game" . PHP_EOL;
}

// Main game loop
while (true) {
    startGame();

    // Get user input
    $choice = readline("> ");

    // Check user input and display a random message based on the choice
    switch ($choice) {
        case '1':
            echo $walkMessages[array_rand($walkMessages)] . PHP_EOL;
            break;
        case '2':
            echo $foodMessages[array_rand($foodMessages)] . PHP_EOL;
            break;
        case '3':
            echo $shelterMessages[array_rand($shelterMessages)] . PHP_EOL;
            break;
        case '4':
            echo "Goodbye!" . PHP_EOL;
            exit;
        default:
            echo "Invalid choice. Please choose again." . PHP_EOL;
    }
}

?>

<?php

// Define array of color options
$colors = [
    "1" => "Red",
    "2" => "Green",
    "3" => "Blue",
    "4" => "Yellow",
    "5" => "Purple",
];

// Function to prompt user to guess the color
function guessColor()
{
    global $colors;
    echo "Guess the hidden color:" . PHP_EOL;
    foreach ($colors as $key => $color) {
        echo "$key. $color" . PHP_EOL;
    }
}

// Generate random hidden color
$hiddenColor = $colors[array_rand($colors)];

// Main game loop
while (true) {
    guessColor();

    // Get user input
    $choice = readline("> ");

    // Check user input against hidden color
    if (isset($colors[$choice]) && $colors[$choice] == $hiddenColor) {
        echo "Congratulations, you guessed the hidden color $hiddenColor!" . PHP_EOL;
        exit;
    } else {
        echo "Sorry, that's not the hidden color. Try again." . PHP_EOL;
    }
}

?>

<?php

// Set path to games directory
$dirPath = __DIR__ . DIRECTORY_SEPARATOR . 'games';

// Check if directory exists. If not, mkdir();
if (!is_dir($dirPath))
{
    mkdir($dirPath, 0755);
    "Directory created - $dirPath\n";
} else {
    echo "Directory exists - $dirPath\n";
}

// Create associatve array of game data
$games = [
    ['name' => 'Spider-Man', 'console' => 'PS5', 'price' => 59.99],
    ['name' => 'Hollow Knight: Silksong', 'console' => 'All', 'price' => 14.99],
    ['name' => 'Forza Horizon 6', 'console' => 'Xbox/PC', 'price' => 49.99],
    ['name' => 'Roller Coaster Tycoon 2', 'console' => 'PC', 'price' => 11.99],
];

// Set a filepath directory variable for games.csv
$filePath = $dirPath . DIRECTORY_SEPARATOR . 'games.csv';

if (!is_dir($filePath))
{
    // Open file stream
    $file = fopen($filePath, 'wb');

    // Iterate games array and write values to games.csv
    foreach($games as $g)
    {
        fputcsv($file, [$g['name'], $g['console'], $g['price']]);
    }

    // Close the file stream
    fclose($file);
    echo "Finished!";

} else {
    echo "Error - File not found. Path look = $filePath\n";
}

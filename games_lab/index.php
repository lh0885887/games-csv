<?php
require __DIR__ . '/includes/functions.php';
$csvPath = __DIR__ . '/games/games.csv';

$rows = read_csv_rows($csvPath);

if (empty($rows)) {
    echo "No data";
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
</head>

<body>
    <?= print_r($rows); ?>
    <table>
        <thead>
            <th>Name</th>
            <th>Console</th>
            <th>Price</th>
        </thead>
        <tbody>
            <?php foreach ($rows as $row): ?>
                <td><?= $row[0]; ?></td>
            <?php endforeach; ?>
        </tbody>

    </table>
</body>

</html>
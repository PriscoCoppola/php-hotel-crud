<?php 

require_once __DIR__ . '/partials/scripts/get-single-stanze.php';

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <main class="container">
        <h1 class="my-4">Details</h1>
        <ul class="list-unstyled">
            <li>Room Number: <?php echo $stanza['room_number']; ?></li>
            <li>Floor <?php echo $stanza['floor']; ?></li>
            <li>Bed <?php echo $stanza['beds']; ?></li>
            <li><a href="./stanze.php">Back to archive</a></li>
        </ul>
    </main>
    
</body>
</html>
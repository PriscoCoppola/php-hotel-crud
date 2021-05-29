<?php 

require_once __DIR__ . '/partials/scripts/get-stanze.php';

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
        <h1 class="my-4">Stanze</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Room Number</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (!empty($stanze)) {
                    foreach ($stanze as $stanza) { ?>
                        <tr>
                            <td><?php echo $stanza['id']; ?></td>
                            <td><?php echo $stanza['room_number']; ?></td>
                            <td><a href="./details.php?id=<?php echo $stanza['id']; ?>">Details</a></td>
                        </tr>
                   <?php }
                } ?>
            </tbody>
        </table>
    </main>
</body>
</html>
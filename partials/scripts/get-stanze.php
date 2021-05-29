<?php 

require_once __DIR__ . '/start-conn.php';

$sql = "SELECT `id`, `room_number` FROM `stanze`";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    $stanze = [];

    while ($row = $result->fetch_assoc()) {
        $stanze[] = $row;
    }
} else {
    echo 'query error';
}

// Close
$conn->close();

?>
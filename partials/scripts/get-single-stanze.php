<?php 

require_once __DIR__ . '/start-conn.php';

$id = empty($_GET['id']) ? false : $_GET['id'];

if ($id) {
    $stmt = $conn->prepare("SELECT * FROM `stanze` WHERE `id` = ?");
    $stmt->bind_param('s', $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && $result->num_rows > 0) {
        $stanza = $result->fetch_assoc();
    }
}

$conn->close();

?>
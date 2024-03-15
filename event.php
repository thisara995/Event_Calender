<?php
include 'db_connection.php';
$sql = "SELECT value, event_date FROM event";
$result = $conn->query($sql);

$events = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $events[] = array(
            'value' => $row['value'],
            'start' => $row['event_date']
        );
    }
}

$conn->close();

echo json_encode($events);

?>

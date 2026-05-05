<?php
$conn = new mysqli('localhost', 'root', '', 'sigas');
$res = $conn->query("SHOW TABLES LIKE '%backup2%'");
while ($row = $res->fetch_row()) {
    echo $row[0] . "\n";
}
?>

<?php
$_SERVER['HTTP_HOST'] = 'localhost';
require 'lib/server/config.php';
require 'lib/server/class.os.php';

$os = new Os();
$conn = $os->conn;

echo "Granting all ACTION_ permissions to superadmin...\n";

// Get all ACTION_ actions
$stmt = $conn->prepare("SELECT module_id, action_id FROM actions WHERE action_id LIKE 'ACTION_%'");
$stmt->execute();
$actions = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($actions as $act) {
    $mid = $act['module_id'];
    $aid = $act['action_id'];
    
    // Check if already granted
    $stmtCek = $conn->prepare("SELECT count(*) FROM group_has_actions WHERE group_id='superadmin' AND module_id=:mid AND action_id=:aid");
    $stmtCek->execute([':mid' => $mid, ':aid' => $aid]);
    if ($stmtCek->fetchColumn() == 0) {
        $stmtIns = $conn->prepare("INSERT INTO group_has_actions (group_id, module_id, action_id) VALUES ('superadmin', :mid, :aid)");
        $stmtIns->execute([':mid' => $mid, ':aid' => $aid]);
        echo "Granted $aid for $mid to superadmin\n";
    }
}

echo "\nDone!\n";

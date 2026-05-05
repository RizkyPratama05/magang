<?php
$_SERVER['HTTP_HOST'] = 'localhost';
require 'lib/server/config.php';
require 'lib/server/class.os.php';

$os = new Os();
$conn = $os->conn;

$modulesDir = 'd:/laragon/www/siga/modules';

function getFiles($dir, &$results = array()) {
    $files = scandir($dir);
    foreach ($files as $key => $value) {
        $path = $dir . DIRECTORY_SEPARATOR . $value;
        if (!is_dir($path)) {
            $results[] = $path;
        } else if ($value != "." && $value != "..") {
            getFiles($path, $results);
        }
    }
    return $results;
}

$allFiles = getFiles($modulesDir);
$moduleActionData = [];

foreach ($allFiles as $file) {
    $ext = pathinfo($file, PATHINFO_EXTENSION);
    if ($ext != 'php') continue;
    
    $content = file_get_contents($file);
    // Find Module Name (Class Name)
    if (preg_match('/class\s+(\w+)\s+extends\s+Database/i', $content, $matches)) {
        $moduleName = $matches[1];
        if (!isset($moduleActionData[$moduleName])) {
            $moduleActionData[$moduleName] = [
                'id' => strtolower($moduleName),
                'actions' => []
            ];
        }

        // Find ACTION_ methods
        if (preg_match_all('/public\s+function\s+ACTION_(\w+)/i', $content, $actMatches)) {
            foreach ($actMatches[1] as $actionName) {
                if (!in_array($actionName, $moduleActionData[$moduleName]['actions'])) {
                    $moduleActionData[$moduleName]['actions'][] = $actionName;
                }
            }
        }
    }
}

// Database Registration
echo "\nRegistering to Database...\n";

foreach ($moduleActionData as $moduleName => $data) {
    $moduleId = $data['id'];
    
    // Insert into modules table
    $stmt = $conn->prepare("INSERT INTO modules (module_id, module, name, description, menu, active) VALUES (:id, :mod, :name, :desc, :menu, 1) ON DUPLICATE KEY UPDATE module=:mod2, name=:name2");
    $stmt->execute([
        ':id' => $moduleId, 
        ':mod' => $moduleName, 
        ':name' => $moduleName, 
        ':desc' => $moduleName . ' module',
        ':menu' => 'Data Pilah', // Default menu
        ':mod2' => $moduleName, 
        ':name2' => $moduleName
    ]);
    echo "Module Registered: $moduleName ($moduleId)\n";

    foreach ($data['actions'] as $actionName) {
        $actionId = "ACTION_" . $actionName;
        // Insert into actions table
        $stmt = $conn->prepare("INSERT INTO actions (module_id, action_id, `option`, `action`, description, log) VALUES (:mid, :aid, 'ACTION', :act, :desc, 1) ON DUPLICATE KEY UPDATE `option`='ACTION', `action`=:act2");
        $stmt->execute([
            ':mid' => $moduleId, 
            ':aid' => $actionId, 
            ':act' => $actionName, 
            ':desc' => 'Action ' . $actionName,
            ':act2' => $actionName
        ]);
        echo "  Action Registered: $actionId for $moduleName\n";
    }
}

echo "\nDone!\n";

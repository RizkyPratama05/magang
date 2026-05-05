<?php
$_SERVER['HTTP_HOST'] = 'localhost';
require 'lib/server/config.php';
require 'lib/server/class.os.php';

$os = new Os();
$conn = $os->conn;

$modulesDir = 'd:/laragon/www/siga/modules';
$allModules = [];

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
    $content = file_get_contents($file);
    $ext = pathinfo($file, PATHINFO_EXTENSION);
    $changed = false;

    if ($ext == 'php') {
        // Find Module Name (Class Name)
        if (preg_match('/class\s+(\w+)\s+extends\s+Database/i', $content, $matches)) {
            $moduleName = $matches[1];
            if (!isset($moduleActionData[$moduleName])) {
                $moduleActionData[$moduleName] = [
                    'id' => strtolower($moduleName),
                    'actions' => []
                ];
            }

            // Find PUBLIC_ methods
            if (preg_match_all('/public\s+function\s+PUBLIC_(\w+)/i', $content, $actMatches)) {
                foreach ($actMatches[1] as $actionName) {
                    $moduleActionData[$moduleName]['actions'][] = $actionName;
                }
            }

            // Replace PUBLIC_ with ACTION_ in PHP
            $newContent = str_replace('PUBLIC_', 'ACTION_', $content);
            if ($newContent !== $content) {
                file_put_contents($file, $newContent);
                $changed = true;
                echo "Updated PHP: $file\n";
            }
        }
    } else if ($ext == 'js') {
        // Replace option: "PUBLIC" with option: "ACTION" in JS
        $newContent = str_replace('option: "PUBLIC"', 'option: "ACTION"', $content);
        // Also handle single quotes just in case
        $newContent = str_replace("option: 'PUBLIC'", "option: 'ACTION'", $newContent);
        
        if ($newContent !== $content) {
            file_put_contents($file, $newContent);
            $changed = true;
            echo "Updated JS: $file\n";
        }
    }
}

// Database Registration
echo "\nRegistering to Database...\n";

foreach ($moduleActionData as $moduleName => $data) {
    $moduleId = $data['id'];
    
    // Insert into modules table
    $stmt = $conn->prepare("INSERT INTO modules (module_id, module, name, active) VALUES (:id, :mod, :name, 1) ON DUPLICATE KEY UPDATE module=:mod, name=:name");
    $stmt->execute([':id' => $moduleId, ':mod' => $moduleName, ':name' => $moduleName]);
    echo "Module Registered: $moduleName ($moduleId)\n";

    foreach ($data['actions'] as $actionName) {
        $actionId = "ACTION_" . $actionName;
        // Insert into actions table
        $stmt = $conn->prepare("INSERT INTO actions (module_id, action_id, `option`, `action`, log) VALUES (:mid, :aid, 'ACTION', :act, 1) ON DUPLICATE KEY UPDATE `option`='ACTION', `action`=:act");
        $stmt->execute([':mid' => $moduleId, ':aid' => $actionId, ':act' => $actionName]);
        echo "  Action Registered: $actionId for $moduleName\n";
    }
}

echo "\nDone!\n";

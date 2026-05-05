<?php
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

foreach ($allFiles as $file) {
    $ext = pathinfo($file, PATHINFO_EXTENSION);
    if ($ext != 'php') continue;
    
    $content = file_get_contents($file);
    $originalContent = $content;
    
    // Regex to match "groups" (case insensitive) but not "`groups`" or part of a word
    // We want to replace it in SQL strings
    // Patterns: "FROM groups", "JOIN groups", "INTO groups", "UPDATE groups", "DELETE FROM groups"
    
    $patterns = [
        '/\bFROM\s+groups\b/i' => 'FROM `groups` ',
        '/\bJOIN\s+groups\b/i' => 'JOIN `groups` ',
        '/\bINTO\s+groups\b/i' => 'INTO `groups` ',
        '/\bUPDATE\s+groups\b/i' => 'UPDATE `groups` ',
        '/\bDELETE\s+FROM\s+groups\b/i' => 'DELETE FROM `groups` '
    ];
    
    foreach ($patterns as $pattern => $replacement) {
        $content = preg_replace($pattern, $replacement, $content);
    }
    
    if ($content !== $originalContent) {
        file_put_contents($file, $content);
        echo "Fixed: $file\n";
    }
}
echo "Done!\n";

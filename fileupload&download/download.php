<?php

if (!isset($_GET['file'])) {
    die("No file specified");
}

$file = basename($_GET['file']);
$path = "uploads/" . $file;

if (!file_exists($path)) {
    die("File not found");
}

header("Content-Type: application/octet-stream");
header("Content-Disposition: attachment; filename=\"$file\"");
header("Content-Length: " . filesize($path));

ob_clean();
flush();

readfile($path);
exit;

?>
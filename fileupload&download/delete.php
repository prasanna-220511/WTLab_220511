<?php

if (!isset($_GET['file'])) {
    die("No file specified");
}

$file = basename($_GET['file']);
$path = "uploads/" . $file;

if (file_exists($path)) {
    unlink($path);
    echo "File deleted successfully<br>";
    echo "<a href='list.php'>Back</a>";
} else {
    echo "File not found";
}

?>
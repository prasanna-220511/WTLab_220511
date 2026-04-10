<?php

$files = scandir("uploads");

echo "<h2>Uploaded Files</h2>";

foreach ($files as $file) {

    if ($file == "." || $file == "..") continue;

    $path = "uploads/" . $file;

    echo "<b>$file</b><br>";
    echo "Size: " . filesize($path) . " bytes<br>";
    echo "Last Modified: " . date("d-m-Y H:i:s", filemtime($path)) . "<br>";

    echo "<a href='download.php?file=$file'>Download</a> | ";
    echo "<a href='delete.php?file=$file'>Delete</a><br><br>";
}

?>
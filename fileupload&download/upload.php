<?php

if ($_FILES['file']['name'] == "") {
    die("No file selected");
}

if (!is_dir("uploads")) {
    mkdir("uploads");
}

$file = basename($_FILES['file']['name']);
$target = "uploads/" . $file;

if (move_uploaded_file($_FILES['file']['tmp_name'], $target)) {
    echo "File uploaded successfully<br>";
    echo "<a href='list.php'>View Files</a>";
} else {
    die("Upload failed");
}

?>
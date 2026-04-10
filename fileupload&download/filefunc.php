<?php

echo "<h2>FILE READ & WRITE</h2>";

$file = fopen("demo.txt", "w");
fwrite($file, "Hello welcome to PHP");
fclose($file);

$file = fopen("demo.txt", "r");
echo fread($file, filesize("demo.txt")) . "<br>";
fclose($file);

echo file_get_contents("demo.txt") . "<br>";

file_put_contents("demo.txt", "New content written");

$lines = file("demo.txt");
print_r($lines);

echo "<hr><h2>FILE INFORMATION</h2>";

$filename = "demo.txt";

if (file_exists($filename)) {
    echo "File exists<br>";
}

echo "Size: " . filesize($filename) . "<br>";
echo "Type: " . filetype($filename) . "<br>";
echo "Access Time: " . date("d-m-Y H:i:s", fileatime($filename)) . "<br>";
echo "Modified Time: " . date("d-m-Y H:i:s", filemtime($filename)) . "<br>";
echo "Created Time: " . date("d-m-Y H:i:s", filectime($filename)) . "<br>";
echo "Permissions: " . fileperms($filename) . "<br>";
echo "Owner: " . fileowner($filename) . "<br>";
echo "Group: " . filegroup($filename) . "<br>";
echo "Inode: " . fileinode($filename) . "<br>";

echo "<hr><h2>FILE & FOLDER MANAGEMENT</h2>";

copy("demo.txt", "copy.txt");
rename("copy.txt", "new_demo.txt");

if (is_file("demo.txt")) {
    echo "demo.txt is a file<br>";
}

mkdir("testfolder");
if (is_dir("testfolder")) {
    echo "Folder created<br>";
}
rmdir("testfolder");

unlink("new_demo.txt");

echo "<hr><h2>DIRECTORY HANDLING</h2>";

$files = scandir(".");
print_r($files);

$dir = opendir(".");
while (($file = readdir($dir)) !== false) {
    echo $file . "<br>";
}
closedir($dir);

echo "Current Dir: " . getcwd() . "<br>";

echo "<hr><h2>FILE LOCKING</h2>";

$file = fopen("demo.txt", "a");

if (flock($file, LOCK_EX)) {
    fwrite($file, "\nLocked write");
    flock($file, LOCK_UN);
}
fclose($file);

$file = fopen("demo.txt", "r");

if (flock($file, LOCK_SH)) {
    echo fread($file, filesize("demo.txt"));
    flock($file, LOCK_UN);
}
fclose($file);

echo "<hr><h2>FILE MODES</h2>";

$file = fopen("demo.txt", "r");
echo fread($file, filesize("demo.txt"));
fclose($file);

$file = fopen("demo.txt", "w");
fwrite($file, "New content");
fclose($file);

$file = fopen("demo.txt", "a");
fwrite($file, " Added");
fclose($file);

$file = fopen("newfile.txt", "x");
fwrite($file, "Hello");
fclose($file);

$file = fopen("demo.txt", "r+");
fwrite($file, "Hi ");
fclose($file);

$file = fopen("demo.txt", "w+");
fwrite($file, "Fresh data");
rewind($file);
echo fread($file, filesize("demo.txt"));
fclose($file);

$file = fopen("demo.txt", "a+");
fwrite($file, "New line");
rewind($file);
echo fread($file, filesize("demo.txt"));
fclose($file);

$file = fopen("brandnew.txt", "x+");
fwrite($file, "Hello World");
rewind($file);
echo fread($file, filesize("brandnew.txt"));
fclose($file);

?>
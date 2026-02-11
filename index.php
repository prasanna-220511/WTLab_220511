<!DOCTYPE html>
<html>
    <head>
        <title>file upload</title>
    </head>
    <body>
        <h2>UPLOAD FILE</h2>
        <form method="post" enctype="multipart/form-data">
            <input type="file" name="myfile">
            <br><br>
            <button type="submit" name="upload">Upload</button>
        </form>
    </body>
</html>
<?php
if(isset($_POST['upload']))
{
    $filename=$_FILES['myfile']['name'];
    $tempname=$_FILES['myfile']['tmp_name'];
    $size=$_FILES['myfile']['size'];
    $err=$_FILES['myfile']['error'];
    $type=$_FILES['myfile']['type'];
    echo "file name:".$filename."<br>";
    echo "temp name:".$tempname."<br>";
    echo"size:".$size."<br>";
    echo "error:".$err."<br>";
    echo "type:".$type."<br>";
    $destination="uploads/".$filename;
    if(move_uploaded_file($tempname,$destination))
    {
        echo "file uploaded successfully.";
    }
    else
    {
        echo "File upload failed.";
    }
    
}
?>
<hr>
<h3>uploaded files</h3>
<?php
$files=scandir("uploads");
foreach($files as $file)
{
    if($file!="."&&$file!="..")
    {
        $path="uploads/".$file;
        $size=filesize($path);
        echo $file . " - " . round($size/1024, 2) . " KB ";
        echo "<a href='download.php?file=$file'>Download</a> | ";
        echo "<a href='index.php?delete=$file' onclick='return confirm(\"Are you sure?\")'>Delete</a><br>";

    }
}
?>
<?php
if (isset($_GET['delete'])) {
    $fileToDelete = "uploads/" . $_GET['delete'];

    if (file_exists($fileToDelete)) {
        unlink($fileToDelete);
        echo "File deleted successfully";
    }
}
?>


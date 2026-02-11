<?php
/*$file=fopen("demo.txt","w");   //fopen()
echo "file opened successfully<br>";
fwrite($file,"hello welcome to php");  //fwrite()
fclose($file);
echo "data written successfully <br>";
$file=fopen("demo.txt","r");
$content=fread($file,filesize("demo.txt"));  //fread()
echo "file content:".$content."<br>";
fclose($file);
echo file_get_contents("demo.txt")."<br>";  //we can read without opening the file
file_put_contents("demo.txt", "New content written File ni array la read chestundi Each line  one array element");  //we can write without opening the file
echo file_get_contents("demo.txt")."<br>";
$lines=file("demo.txt");    //line by line reading
print_r($lines);*/

#FILE INFORMATION FUNCTIONS
/*$filename="demo.txt";
if (file_exists($filename))   //check whether file exists or not
    {
    echo "file exists<br>";
    }
else{
    echo "file not exists<br>";
}
echo "file size:".filesize($filename)." bytes<br>";  //file size
echo "file type:".filetype($filename)."<br>";  //file type
echo "last accessed time :".date("d-m-Y H:i:s A",fileatime($filename))."<br>";  //last accessed time
echo "last modified time :".date("d-m-Y H:i:s A",filemtime($filename))."<br>";  //last modified time
echo "last changed time :".date("d-m-Y H:i:s A",filectime($filename))."<br>";  //last created time
echo "permissions: ".fileperms($filename)."<br>";  //file permissions
echo "file owner :".fileowner($filename)."<br>";  //file owner
echo "group id :".filegroup($filename)."<br>";  //file group
echo "inode number :".fileinode($filename)."<br>";  //file */


#FILE&FOLDER MANAGMENT
/*copy("demo.txt","demo_cpy.txt");  //copying a file
echo "file copied successfully <br>";
rename("demo_cpy.txt","new_demo.txt");  //renaming a file
echo "file renamed successfully <br>";
unlink("new_demo.txt");  //deleting a file
echo "file deleted successfully <br>"; 
mkdir("folders");  //creates a folder
echo "folder created successfully <br>";
rmdir("folders");  //deletes a folder
echo "folder deleted successfully <br>";
if(is_file("demo.txt"))    //whether it is a file or not
{
    echo "file exists<br>";
}
if(is_dir("uploads"))  //whether it is a folder or not
{
    echo "folder exists<br>";
}*/

#DIRECTORY HANDLING FUNCTIONS
/*$files=scandir("uploads");  //return the array of files&folders in a directory
print_r($files);
$dir=opendir("uploads");  //open a directory
echo "directory opened <br>";
while (($file=readdir($dir))!==false)   //reads names one by one
{
    echo $file."<br>";
}
closedir($dir);  //close a directory
echo getcwd()."<br>";  //get current working directory
chdir("uploads");  //change directory
echo getcwd()."<br>";

#FILE LOCKING
$file=fopen("demo.txt","a");
if(flock($file,LOCK_EX))  //exclusive lock(write lock)
{
    fwrite($file,"\n new data added \n");
    flock($file,LOCK_UN);  //release the lock(unlock)
}
fclose($file);
echo "data written successfully <br>";

$file=fopen("demo.txt","r");
if(flock($file,LOCK_SH))  //shared lock(read lock)
{
    echo fread($file,filesize("demo.txt"))."<br>";
    flock($file,LOCK_UN);  //release the lock(unlock)
}
fclose($file);
echo "data read successfully <br>";*/


#FILE OPERATION MODES
$file = fopen("demo.txt", "r");   //only for reading
echo fread($file, filesize("demo.txt"))."<br>";
fclose($file);

$file = fopen("demo.txt", "w");  //only for writing erase old content
fwrite($file, "New content");
fclose($file);

$file = fopen("demo.txt", "a");  //appends to previous data in file
fwrite($file, "Added line\n");
fclose($file);

$file = fopen("newfile.txt", "x");  //if file exists error else create new file
fwrite($file, "Hello");
fclose($file);

$file = fopen("demo.txt", "r+");  //for both read and write file must exist
fwrite($file, "Hi ");
fclose($file);

$file = fopen("demo.txt", "w+");  //if file exists erases the file 
fwrite($file, "Fresh data");
rewind($file);   //to bring pointer to starting of the file
echo fread($file, filesize("demo.txt"));
fclose($file);

$file = fopen("demo.txt", "a+");  //if file exists pointer at end of the file
fwrite($file, "New line\n");
rewind($file);
echo fread($file, filesize("demo.txt"));
fclose($file);

$file = fopen("brandnew.txt", "x+"); //if file exists fail else create write and read allowed
fwrite($file, "Hello World");
rewind($file);
echo fread($file, filesize("brandnew.txt"));
fclose($file);
;
?>
<?php
echo "<h2>PHP File Functions - Complete Demo</h2>";

$file = "sample.txt";
$copyFile = "copy_sample.txt";
$dirName = "testfolder";
#File Read/Write Functions
$handle = fopen($file, "w");
fwrite($handle, "Welcome to RS Cafe File Lab\n");
fclose($handle);

$handle = fopen($file, "a");
fwrite($handle, "Appending new line\n");
fclose($handle);

$handle = fopen($file, "r");
$content = fread($handle, filesize($file));
fclose($handle);

echo "<h3>File Content:</h3>";
echo nl2br($content);

echo "<h3>Using file_get_contents():</h3>";
echo nl2br(file_get_contents($file));

file_put_contents($file, "Overwritten using file_put_contents()\n");

echo "<h3>Using file() - Array output:</h3>";
$lines = file($file);
print_r($lines);
# FILE INFORMATION FUNCTIONS 
echo "<h3>File Information:</h3>";
echo "File Exists: " . (file_exists($file) ? "Yes" : "No") . "<br>";
echo "File Size: " . filesize($file) . " bytes<br>";
echo "File Type: " . filetype($file) . "<br>";
echo "Last Access Time: " . date("Y-m-d H:i:s", fileatime($file)) . "<br>";
echo "Last Modified Time: " . date("Y-m-d H:i:s", filemtime($file)) . "<br>";
echo "Created Time: " . date("Y-m-d H:i:s", filectime($file)) . "<br>";
echo "Permissions: " . fileperms($file) . "<br>";
echo "Owner: " . fileowner($file) . "<br>";
echo "Group: " . filegroup($file) . "<br>";
echo "Inode: " . fileinode($file) . "<br>";
#FILE & FOLDER MANAGEMENT 
copy($file, $copyFile);
echo "<br>File Copied<br>";

rename($copyFile, "renamed_sample.txt");
echo "File Renamed<br>";

if(!is_dir($dirName)){
    mkdir($dirName);
    echo "Folder Created<br>";
}

echo "Is File: " . (is_file($file) ? "Yes" : "No") . "<br>";
echo "Is Directory: " . (is_dir($dirName) ? "Yes" : "No") . "<br>";
#DIRECTORY HANDLING 
echo "<h3>Directory Listing using scandir():</h3>";
$files = scandir(".");
foreach($files as $f){
    echo $f . "<br>";
}

echo "<h3>Directory Listing using opendir():</h3>";
$dh = opendir(".");
while(($file = readdir($dh)) !== false){
    echo $file . "<br>";
}
closedir($dh);

echo "<br>Current Working Directory: " . getcwd() . "<br>";

chdir($dirName);
echo "Changed Directory To: " . getcwd() . "<br>";
chdir("..");

#FILE LOCKING
echo "<h3>File Locking:</h3>";
$handle = fopen("lock.txt", "w");
if(flock($handle, LOCK_EX)){
    fwrite($handle, "File locked and written safely.");
    flock($handle, LOCK_UN);
}
fclose($handle);
echo "File Locked & Written Successfully<br>";
#DELETE FUNCTIONS
unlink("renamed_sample.txt");
echo "File Deleted<br>";

rmdir($dirName);
echo "Folder Deleted<br>";

?>
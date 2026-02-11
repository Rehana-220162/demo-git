<?php
$dir = "uploads/";

if(isset($_GET['delete'])){
    unlink($dir . $_GET['delete']);
    header("Location: file_manager.php");
}

echo "<h2>Mini File Manager</h2>";

echo "<table border='1' cellpadding='10'>";
echo "<tr><th>File</th><th>Size</th><th>Last Modified</th><th>Actions</th></tr>";

$files = scandir($dir);

foreach($files as $file){
    if($file != "." && $file != ".."){

        echo "<tr>";
        echo "<td>$file</td>";
        echo "<td>" . filesize($dir.$file) . " bytes</td>";
        echo "<td>" . date("Y-m-d H:i:s", filemtime($dir.$file)) . "</td>";
        echo "<td>
        <a href='file_upload.php?download=$file'>Download</a> |
        <a href='?delete=$file'>Delete</a>
        </td>";
        echo "</tr>";
    }
}
echo "</table>";
?>
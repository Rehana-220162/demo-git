<?php
$uploadDir = "uploads/";

if(isset($_POST['upload'])){

    $fileName = $_FILES['myfile']['name'];
    $tempName = $_FILES['myfile']['tmp_name'];
    $targetPath = $uploadDir . $fileName;

    if(move_uploaded_file($tempName, $targetPath)){
        echo "File uploaded successfully! <br><br>";
        echo "<a href='?download=$fileName'>Download File</a>";
    } else {
        echo "Upload Failed!";
    }
}

if(isset($_GET['download'])){
    $file = $uploadDir . $_GET['download'];

    if(file_exists($file)){
        header("Content-Disposition: attachment; filename=" . basename($file));
        readfile($file);
        exit;
    }
}
?>

<h2>Upload File</h2>
<form method="POST" enctype="multipart/form-data">
    <input type="file" name="myfile" required>
    <input type="submit" name="upload" value="Upload">
</form>
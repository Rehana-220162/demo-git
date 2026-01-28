<!DOCTYPE html>
<html>
<body>
<h2>Register</h2>

<form method="POST">
    Username: <input type="text" name="username" required><br><br>
    Email: <input type="email" name="email" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    <button type="submit">Register</button>
</form>

<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $u = $_POST['username'];
    $e = $_POST['email'];
    $p = $_POST['password'];

    $query = "INSERT INTO users (username, email, password)
              VALUES ('$u', '$e', '$p')";

    if (mysqli_query($conn, $query)) {
        echo "Registration successful";
    } else {
        echo "Error";
    }
}
?>
</body>
</html>

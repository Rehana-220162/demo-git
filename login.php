<!DOCTYPE html>
<html>
<body>
<h2>Login</h2>

<form method="POST">
    Email: <input type="email" name="email" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    <button type="submit">Login</button>
</form>

<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $e = $_POST['email'];
    $p = $_POST['password'];

    $query = "SELECT * FROM users WHERE email='$e' AND password='$p'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        echo "Login successful";
    } else {
        echo "Invalid login details";
    }
}
?>
</body>
</html>
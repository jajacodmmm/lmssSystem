<?php
session_start();
require 'db.php';

$message = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    $sql = "SELECT * FROM users WHERE username=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    // for demo: if passwords were hashed with SHA2 in the SQL file
    if ($user && hash('sha256', $password) === $user['password']) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['fullname'] = $user['fullname'];
        header("Location: index.php");
        exit();
    } else {
        $message = "Invalid username or password";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Login</title>
</head>
<body>
<h2>Login</h2>
<form method="post">
    <p style="color:red;"><?php echo $message; ?></p>
    <label>Username:
        <input type="text" name="username" required>
    </label><br><br>
    <label>Password:
        <input type="password" name="password" required>
    </label><br><br>
    <button type="submit">Login</button>
</form>
</body>
</html>



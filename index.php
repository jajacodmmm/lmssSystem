<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Dashboard</title>
</head>
<body>
<h2>Welcome, <?php echo htmlspecialchars($_SESSION['fullname']); ?>!</h2>

<p>This is your student dashboard.</p>

<p><a href="logout.php">Logout</a></p>
</body>
</html>

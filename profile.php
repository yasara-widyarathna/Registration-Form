<?php
session_start();
include 'db_connect.php';

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php'); // Redirect to login if not logged in
    exit;
}

$user_id = $_SESSION['user_id'];

$sql = "SELECT first_name, last_name, nic, email, gender, mobile, address FROM registrations WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$stmt->bind_result($first_name, $last_name, $nic, $email, $gender, $mobile, $address);
$stmt->fetch();
$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <h1>Profile Details</h1>
    <p><strong>First Name:</strong> <?php echo htmlspecialchars($first_name); ?></p>
    <p><strong>Last Name:</strong> <?php echo htmlspecialchars($last_name); ?></p>
    <p><strong>NIC No:</strong> <?php echo htmlspecialchars($nic); ?></p>
    <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
    <p><strong>Gender:</strong> <?php echo htmlspecialchars($gender); ?></p>
    <p><strong>Mobile Number:</strong> <?php echo htmlspecialchars($mobile); ?></p>
    <p><strong>Address:</strong> <?php echo htmlspecialchars($address); ?></p>
</body>
</html>

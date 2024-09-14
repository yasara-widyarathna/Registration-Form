<?php
/*include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $nic = $_POST['nic'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];

    $sql = "INSERT INTO registrations (first_name, last_name, nic, email, gender, mobile, address) 
            VALUES ('$first_name', '$last_name', '$nic', '$email', '$gender', '$mobile', '$address')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}*/




session_start();
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $nic = $_POST['nic'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];

    $sql = "INSERT INTO registrations (first_name, last_name, nic, email, gender, mobile, address) 
            VALUES ('$first_name', '$last_name', '$nic', '$email', '$gender', '$mobile', '$address')";

    if ($conn->query($sql) === TRUE) {
        $user_id = $conn->insert_id; // Get the inserted user ID
        $_SESSION['user_id'] = $user_id; // Save user ID to session
        echo "Registration successful";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}


?>






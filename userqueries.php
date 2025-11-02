<?php
$conn = mysqli_connect('localhost', 'root', 'matsele20', 'website');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$user = $_POST['user'];
$country = $_POST['country'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];

$query = "INSERT INTO userqueries (name, country, mobile, email, message)
          VALUES ('$user', '$country', '$phone', '$email', '$message')";

if (mysqli_query($conn, $query)) {
    header('Location: index.html');
    exit();
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>

<?php

$servername = "localhost";
$username = "mpit";
$password = "Dandar1820";
$dbname = "mpit";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_POST['sending']) {
    $login = $_POST['login'];
    $pass = $_POST['password'];
    $mail = $_POST['email'];
    $tel = $_POST['tel'];

    $sql = "INSERT INTO students VALUES (NULL, '$login', '$mail', '$pass', '$tel')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

}

mysqli_close($conn);
?>
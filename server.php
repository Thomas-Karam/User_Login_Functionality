<?php
$name = '';
$email = '';
$username = '';
$password = '';
$error = '';

$db = mysqli_connect('localhost', 'root', '', 'user_login'); // connect to the database

if (isset($_POST['Sign_Up'])) {
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $password = md5($password);

    $query = "SELECT * FROM login WHERE email='$email' OR username='$username'";
    $result = mysqli_query($db, $query);

    if (mysqli_num_rows($result) > 0) {
        $error = 'Email or Username already exists';
    } else {
        $query = "INSERT INTO login (name, email, username ,password) VALUES ('$name', '$email', '$username','$password')";
        $result = mysqli_query($db, $query);
        header('location: sign_in.php');
    }
}

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = md5($password);

    $query = "SELECT * FROM login WHERE (email='$email' OR username='$email') AND password='$password'";
    $result = mysqli_query($db, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        setcookie('name', $row['name'], time() + 3600, '/');
        header('location: index.php');
    } else {
        $error = 'Invalid username or email or password';
    }
}
?>
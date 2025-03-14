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

    $query = "SELECT * FROM users WHERE email='$email' OR username='$username'";
    $result = mysqli_query($db, $query);

    if (mysqli_num_rows($result) > 0) {
        $error = 'Email or Username already exists';
    } else {
        $query = "INSERT INTO users (name, email, username ,password) VALUES ('$name', '$email', '$username','$password')";
        $result = mysqli_query($db, $query);
        header('location: index.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="shortcut icon" href="image_l.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        body {
            background-color: whitesmoke;
        }

        main {
            width: 80%;
            overflow: auto;
            margin: 50px auto;
            border-radius: 10px;
            background-color: white;
            box-shadow: 3px 3px 1px 2px rgba(0, 0, 255, 0.440);
        }

        main img {
            float: left;
            width: 50%;
            height: 550px;
        }

        main form {
            float: right;
            width: 45%;
            margin: 10px 10px;
        }

        main form legend {
            color: rgba(0, 0, 255, 0.440);
            margin: 30px auto;
            font-size: 30px;
            font-weight: bold;
        }

        main form .input {
            width: 93%;
            margin: 10px 0;
            border-bottom: 3px solid black;
        }

        main form .input:focus-within {
            border-bottom: 3px solid rgba(0, 0, 255, 0.440);
        }

        main form .input:focus-within i {
            color: rgba(0, 0, 255, 0.440);
        }

        main form .input i {
            font-size: larger;
        }

        main form .input input {
            width: 88%;
            margin: 10px auto;
            padding: 10px;
            outline: none;
            border: none;
        }

        input[type="checkbox"] {
            margin: 20px auto;
            width: 8%;
        }

        input[type="submit"] {
            width: 95%;
            margin: 20px auto;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: rgba(0, 0, 255, 0.440);
            color: white;
            font-size: 15px;
        }

        p {
            display: inline;
            float: right;
            margin-right: 30px;
        }

        a {
            color: rgba(0, 0, 255, 0.440);
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .error {
            width: 88%;
            padding: 15px;
            border-radius: 10px;
            border-left: 3px solid red;
            background-color: rgba(255, 0, 0, 0.164);
        }

        .error i {
            color: red;
        }

        @media (max-width: 768px) {
            main {
                width: 90%;
            }

            main img {
                display: none;
            }

            main form {
                width: 90%;
            }
        }
    </style>
</head>

<body>
    <main>
        <img src="image_u.png" alt="login image">
        <form action="sign_up.php" method="post">
            <legend class="fas fa-user-edit"> Sign Up</legend>
            <?php if ($error): ?>
                <div class="error">
                    <i class="fas fa-exclamation-triangle"></i>
                    <?php echo $error; ?>
                </div>
            <?php endif; ?>
            <div class="input">
                <i class="fas fa-user"></i>
                <input type="text" class="fas" name="name" placeholder="Name" autofocus required value="<?php $name; ?>">
            </div>
            <div class="input">
                <i class="fas fa-envelope"></i>
                <input type="email" class="fas" name="email" placeholder="Gmail" required value="<?php $email; ?>">
            </div>
            <div class="input">
                <i class="fas fa-at"></i>
                <input type="text" class="fas" name="username" placeholder="Username" required value="<?php $username; ?>">
            </div>
            <div class="input">
                <i class="fas fa-lock"></i>
                <input type="password" class="fas" name="password" placeholder="Password" required minlength="6" value="<?php $password; ?>">
            </div>
            <input type="submit" name="Sign_Up" value="Sign Up">
            <p>You already have an account? <a href="index.php">Login</a></p>
        </form>
    </main>
</body>

</html>
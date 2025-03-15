<?php include 'server.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Log In</title>
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
            margin: 50px 10px;
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
        <img src="image_i.png" alt="login image">
        <form action="index.php" method="post">
            <legend class="fas fa-user-edit"> Log In</legend>
            <?php if ($error): ?>
                <div class="error">
                    <i class="fas fa-exclamation-triangle"></i>
                    <?php echo $error; ?>
                </div>
            <?php endif; ?>
            <div class="input">
                <i class="fas fa-at"></i>
                <input type="text" class="fas" name="email" placeholder="Username or Gmail" autofocus required>
            </div>
            <div class="input">
                <i class="fas fa-lock"></i>
                <input type="password" class="fas" name="password" placeholder="Password" required minlength="6">
            </div>
            <input type="checkbox" id="remember">
            <label for="remember">Remember Me</label>
            <p><a href="">Forgot Password!</a></p>
            <input type="submit" name="login" value="Log In">
            <p>You don't have an account? <a href="sign_up.php">Sign Up</a></p>
        </form>
    </main>
</body>

</html>
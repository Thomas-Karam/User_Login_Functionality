<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <link rel="shortcut icon" href="image_l.ico" type="image/x-icon">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <style>
            body {
                background-color: whitesmoke;
            }

            nav {
                top: 0;
                left: 5px;
                right: 5px;
                position: fixed;
                padding: 10px;
                color: rgba(0, 0, 255, 0.440);
                background-color: white;
                border-radius: 0px 0px 10px 10px;
            }

            nav h1 {
                display: inline;
            }

            nav a {
                margin: 10px;
                float: right;
            }
        </style>
    </head>

    <body>
        <nav>
            <h1>Hi, 
                <?php
                if (!$_COOKIE['name']) {
                    header('Location: index.php');
                }
                else
                    echo $_COOKIE['name']; 
                ?>
            </h1>
            <a href="index.php" class="fas fa-sign-out"> logout</a>
        </nav>
    </body>
</html>
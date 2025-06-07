<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <link rel="shortcut icon" href="static/Logo.ico" type="image/x-icon">
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

            nav button {
                padding: 10px;
                margin: 5px;
                float: right;
                border: none;
                cursor: pointer;
                font-size: large;
                border-radius: 10px;
            }

            nav a {
                color: black;
                padding: 10px;
                margin: 5px;
                float: right;
                font-size: large;
                border-radius: 10px;
                text-decoration: none;
                background-color: whitesmoke;
            }
        </style>
    </head>

    <body>
        <nav>
            <?php if (!$_COOKIE['name']): ?>
                <h1>Hi, Dear</h1>
                <a href="sign_in.php" class="fas fa-user"> Sign In</a>
            <?php else: ?>
                <h1>Hi, <?php echo $_COOKIE['name']; ?> </h1>
                <a href="" class="fas fa-user"></a>
                <button type="button" class="fas fa-shopping-cart"></button>
            <?php endif; ?>
        </nav>
    </body>
</html>
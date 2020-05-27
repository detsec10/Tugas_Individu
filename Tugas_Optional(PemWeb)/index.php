<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-page">
        <div class="form">
            <form action="registration.php" method="post" class="register-form">
                <input type="text" name="user" placeholder="username">
                <input type="password" name="password" placeholder="password">
                <input type="text" name="email" placeholder="email id">
                <button type="submit">Create</button>

                <p class="message">Sudah Terdaftar? <a href="#">Login</a>
                </p>
            </form>

            <form action="validation.php" method="POST" class="login-form">
                <input type="text" name="user" placeholder="username">
                <input type="password" name="password" placeholder="password">
                <button type="submit">Login</button>
                <p class="message">Belum Terdaftar? <a href="#">Register</a>
                </p>
            </form>
        </div>

    </div>    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
    $('.message a').click(function(){
    $('form').animate({height:"toggle",opacity:"toggle"}, "slow");
    });
    </script>

</body>
</html>
<!-- <?php include('server.php') ?> -->
<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Bootstrap Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <html>
    <br><br><br><br><br>
    <center>

        <head>
            <title>Register</title>
            <link rel="stylesheet" href="register.css">
        </head>



<body>
    <div class="card">
        <div class="card-body">

            <div class="container">
                <h1>Daftar Akun</h1>
                <form action="" method="post">
                    
                    <label>Username</label><br>
                    <input id="username" type="text" class="validate" name="username"><br>
                    
                    <label>E-Mail</label><br>
                    <input id="email" type="text" class="validate" name="email"><br>
                    
                    <label>Password</label><br>
                    <input id="password_1" class="validate" name="password_1" type="password"><br>
                    
                    <label>Ulang Password</label><br>
                    <input id="password_2" class="validate" name="password_2" type="password"><br>
                    <br>
                    <button type="submit" name="reg_user">Register</button><br><br>

                    <button href="index.php" class="btn btn-outline-dark">Back</button>
                </form><br>
            </div>


        </div>
    </div>

    </center>


</body>

</html>
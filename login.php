<?php
$connect=mysqli_connect('localhost', 'root', '', 'ml');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Bootstrap Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
    <link rel="stylesheet" href="login.css">
</head>
<body>



    <br> <br> <br> <br>
    <center>
        
    <div class="card">
        <div class="card-body">

    <headeer>
        <h3>Masukan Akun<h3>
    </header>
    
    <form action="index.php" method="POST">
    
            <p>
                <label for="Nama">Username </label><br>
                <textarea type="text" name="Nama" placeholder="Nama Lengkap"></textarea>
            </p>

            <p>
                <label for="Nama">Password </label><br>
                <textarea type="text" name="Password" placeholder="password"></textarea>
            </p>
          
            <p>
                <input type="submit" value="Log In" name="log in"/><br>
                <br>
                    
                <button href="register.php" class="btn btn-outline-dark">register</button><br>
            </p>

<button href="index.php" class="btn btn-outline-dark">Back</button>
</form>
</div>
</div>
     </center>
       
</body>
</html>
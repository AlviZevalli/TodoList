<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="styleindex.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="text-center font-monospace">
                    <span class="colorful-text">L</span>
                    <span class="colorful-text">o</span>
                    <span class="colorful-text">g</span>
                    <span class="colorful-text">i</span>
                    <span class="colorful-text">n</span>
                </h2>
                <form action="LoginAthentication.php" method="POST">
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>

                    <div class="text-center" style="margin-top: 20px;">
                        <button type="submit" class="btn btn-primary" style="background-color: blue;"><i class="fa-solid fa-right-to-bracket"></i></button>
                    </div>
                    
                    <?php
                    if (isset($_SESSION['login_error'])) {
                        echo '<p class="text-danger mt-3">' . $_SESSION['login_error'] . '</p>';
                        unset($_SESSION['login_error']);
                    }
                    ?>
                </form>
            </div>
        </div>
    </div>
    <p class="marquee">Ngapain Bang Ayo Login</p>
    <script src="https://kit.fontawesome.com/cc52547201.js" crossorigin="anonymous"></script>
</body>
</html>

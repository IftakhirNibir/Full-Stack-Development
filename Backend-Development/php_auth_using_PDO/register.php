<?php
  session_start();
  require 'connection.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registeration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row justify-content-center" >
            <h3 class="text-center mt-5">Registeration Form</h3>
    <form action="register.php" method="post" style="width: 50%;">
        <div class="mb-3">
          <label for="username" class="form-label">Username: </label>
          <input type="text" class="form-control" id="username" name="username">
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password: </label>
          <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="mb-3">
            <label for="confirm_password" class="form-label">Confirm Password: </label>
            <input type="password" class="form-control" id="confirm_password" name="confirm_password">
          </div>
        <button type="submit" class="btn btn-primary">Submit</button><br>
        <a href="login.php" style="text-decoration:none;">Already Register? Go for Login</a>
        <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'] ?? ''; //If the username field is not submitted, $username will be assigned an empty string ('').
        $password = $_POST['password'] ?? '';
        $confirm_password = $_POST['confirm_password'] ?? '';
    
        if (empty($username) || empty($password) || empty($confirm_password)) {
            echo "Please fill out both fields.";
            exit;
        }
    
        
        if ($password !== $confirm_password) {
        echo 'Passwords do not match.';
        exit;
        }
    
        try {
            // Check if username already exists
            $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username");
            $stmt->execute([':username' => $username]);
            if ($stmt->rowCount() > 0) {
                echo 'Username already exists.';
                exit;
            }
    
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT); //PASSWORD_DEFAULT: This is a constant that tells PHP to use the default algorithm for hashing passwords. As of PHP 7.4 and later, this default is the bcrypt algorithm, which is very secure and automatically handles salt generation (a technique used to further protect against rainbow table attacks).
    
       
        $stmt = $pdo->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
            $stmt->execute([':username' => $username, ':password' => $hashedPassword]);
            echo "Registration successful!";
        }catch (PDOException $e) {
            echo "Registration failed: " . $e->getMessage();
        }
    }
    ?>
      </form>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

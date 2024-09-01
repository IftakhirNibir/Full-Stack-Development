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
            <h3 class="text-center mt-5">Login</h3>
    <form action="" method="post" style="width: 50%;">
        <div class="mb-3">
          <label for="username" class="form-label">Username: </label>
          <input type="text" class="form-control" id="username" name="username">
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password: </label>
          <input type="password" class="form-control" id="password" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button><br>
        <a href="register.php" style="text-decoration:none;">Create new account?</a>
        <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $username = $_POST['username'] ?? '';
                $password = $_POST['password'] ?? '';
            
                if (empty($username) || empty($password)) {
                    echo "Please fill out both fields.";
                    exit;
                }
            
            
                $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username");
                $stmt->execute([':username' => $username]);
                $user = $stmt->fetch(PDO::FETCH_ASSOC); // 'fetch()' only retrieves one row, PDO::FETCH_ASSOC: This fetch mode tells the fetch() method to return the row as an associative array.  
            
            
                // Verify the password
                if ($user && password_verify($password, $user['password'])) { // This function checks whether the plain-text password provided by the user matches the hashed password stored in the database. "$password" The plain-text password entered by the user and "$user['password']" The hashed password retrieved from the database.
                    $_SESSION['user_id'] = $user['id']; //This line stores the user's ID in the session under the key user_id.
                    $_SESSION['username'] = $user['username'];
                    echo "Login successful!<br>";
                    echo "<a href='dashboard.php'>Go To Dashborad</a>";
                } else {
                    echo "Invalid username or password.";
                }
            }
        ?>
    </form>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>


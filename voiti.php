<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Registration</title>
    <link rel="stylesheet" href="voiti.css">
</head>
<body>
<div class="center">
    <h1>Registration</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require('db.php'); // Include the database connection file
        if (!isset($conn)) {
            die("Error: Database connection not established.");
        }
        $email = $_POST["email"];
        $password = password_hash($_POST["password"], PASSWORD_BCRYPT); // Hash the password securely
        $created_at = date('Y-m-d H:i:s');

        $query = "INSERT INTO users (email, password, created_at) VALUES ($1, $2, NOW())";
        $result = pg_query_params($conn, $query, array($email, $password));

        if ($result) {
            echo "Registration successful!";
            setcookie('user', 'Yes', time() + 3600, '/');
            header('Location: main.php');
        } else {
            echo "Error registering the user.";
        }

        pg_close($conn);
    }
    ?>
    <form method="post">
        <div class="txt_field">
            <input type="email" name="email" required>
            <span></span>
            <label>Email</label>
        </div>
        <div class="txt_field">
            <input type="password" name="password" required>
            <span></span>
            <label>Password</label>
        </div>
        <button type="submit">Create</button>
        <div class="signup_link">
            Already have an account? <a href="login.php">Signup</a>
        </div>
    </form>
</div>

</body>
</html>

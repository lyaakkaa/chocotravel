<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="voiti.css">
</head>
<body>
<div class="center">
    <h1>Login</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require('db.php');
        if (!isset($conn)) {
            die("Error: Database connection not established.");
        }
        $email = $_POST["email"];
        $password = $_POST["password"];
        $query = "SELECT * FROM users WHERE email = $1";
        $result = pg_query_params($conn, $query, array($email));

        if ($result) {
            $row = pg_fetch_assoc($result);
            if (password_verify($password, $row["password"])) {
                $_SESSION['user'] = [
                    'user_id' => $row['user_id'],
                    'name' => $row['name'],
                    'surname' => $row['surname'],
                    'email' => $row['email'],
                ];
                setcookie('user', 'Yes', time() + 3600, '/');
                if (isset($_SESSION['flight_id'])) {
                    $flight_id = $_SESSION['flight_id'];
                    header("Location: flight_details.php?flight_id=$flight_id");
                    exit();
                } else {
                    header("Location: main.php");
                    exit();
                }
            } else {
                echo "Неверные учетные данные. Попробуйте снова.";
            }
        } else {
            echo "Ошибка при выполнении запроса.";
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
        <button type="submit">Login</button>
        <div class="signup_link">
            Don't have an account yet? <a href="voiti.php">Signup</a>
        </div>
    </form>
</div>

</body>
</html>

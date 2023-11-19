<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Registration</title>
    <link rel="stylesheet" href="voiti.css">
</head>
<body>
<div class="center">
    <h1>Регистрация</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require('db.php'); // Include the database connection file
        if (!isset($conn)) {
            die("Error: Database connection not established.");
        }

        $name = $_POST["name"];
        $surname = $_POST["surname"];
        $email = $_POST["email"];
        $password = password_hash($_POST["password"], PASSWORD_BCRYPT); // Hash the password securely
        $created_at = date('Y-m-d H:i:s');

        $query = "INSERT INTO users (name, surname, email, password, created_at) VALUES ($1, $2, $3, $4, NOW())";
        $result = pg_query_params($conn, $query, array($name, $surname, $email, $password));

        if ($result) {
            $_SESSION['user'] = [
                'name' => $name,
                'surname' => $surname,
                'email' => $email,
            ];
            echo "Registration successful!";
            setcookie('user', 'Yes', time() + 3600, '/');
            header('Location: main.php');
            exit();
        }

        pg_close($conn);
    }
    ?>
    <form method="post">
        <div class="txt_field">
            <input type="text" name="name" required>
            <span></span>
            <label>Имя</label>
        </div>
        <div class="txt_field">
            <input type="text" name="surname" required>
            <span></span>
            <label>Фамилия</label>
        </div>
        <div class="txt_field">
            <input type="email" name="email" required>
            <span></span>
            <label>Email</label>
        </div>
        <div class="txt_field">
            <input type="password" name="password" required>
            <span></span>
            <label>Пароль</label>
        </div>
        <button type="submit">Создать</button>
        <div class="signup_link">
            Уже есть аккаунт? <a href="login.php">Войти</a>
        </div>
    </form>
</div>

</body>
</html>

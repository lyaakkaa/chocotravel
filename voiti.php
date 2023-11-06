

<!DOCTYPE html>
<html>
<head>
    <title>- Choco</title>
    <link href="voiti.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@800&display=swap" rel="stylesheet">
</head>
<body>
<div class="container">
    <img id="img1" src="images/chocotravel_logo.svg" width="360" height="">
    <div id="box">
        <div id="tex">
            <p class="info">Введите данные</p>
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
                } else {
                    echo "Error registering the user.";
                }

                pg_close($conn);
            }
            ?>

            <form method="post">
                <div class="input-container">
                    <input id="box2" type="email" name="email" placeholder="email" required>
                    <input id="box2" type="password" name="password" placeholder="password" required>
                </div>
                <button type="submit" class="btn_1">Создать аккаунт</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>

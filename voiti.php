

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
                // Handle form submission
                // Connect to your database (replace with your database details)
                $host = 'localhost';
                $dbname = 'chocotravel';
                $username = 'postgres';
                $password = 'dimash7628';

                try {
                    $pdo = new PDO("pgsql:host=$host;dbname=$dbname", $username, $password);
                } catch (PDOException $e) {
                    die("Database connection failed: " . $e->getMessage());
                }

                $email = $_POST["email"];
                $password = password_hash($_POST["password"], PASSWORD_BCRYPT); // Hash the password securely

                $stmt = $pdo->prepare("INSERT INTO users (email, password, created_at) VALUES (?, ?, NOW())");
                if ($stmt->execute([$email, $password])) {
                    echo "User registered successfully!";
                } else {
                    echo "Error registering user.";
                }
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

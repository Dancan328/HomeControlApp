<!-- templates/header.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>SmartHome</title>
</head>
<body>
<header>
    <h1>SmartHome</h1>
    <?php if (isset($_SESSION['user_id'])): ?>
        <a href="php/logout.php">Logout</a>
    <?php else: ?>
        <a href="index.php">Login</a>
    <?php endif; ?>
</header>

<!-- index.php -->
<?php
session_start();
include 'php/database.php'; // Ensure this path is correct
?>

<?php include 'templates/header.php'; ?>

<main>
    <h2>Login</h2>
    <form action="php/login.php" method="POST">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required>
        
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
        
        <button type="submit">Login</button>
    </form>

    <h2>Register</h2>
    <form action="php/register.php" method="POST">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required>
        
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
        
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
        
        <button type="submit">Register</button>
    </form>
</main>

<?php include 'templates/footer.php'; ?>

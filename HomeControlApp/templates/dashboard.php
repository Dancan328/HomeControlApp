<!-- templates/dashboard.php -->
<?php
// Start the session and include the database connection
session_start();
include '../php/database.php';

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: ../index.php');
    exit();
}

$user_id = $_SESSION['user_id'];

// Fetch the devices for the logged-in user
$stmt = $pdo->prepare("SELECT * FROM devices WHERE user_id = ?");
$stmt->execute([$user_id]);
$devices = $stmt->fetchAll();
?>

<?php include 'header.php'; ?>

<main>
    <h2>Dashboard</h2>
    <ul>
        <?php foreach ($devices as $device): ?>
            <li>
                <?php echo htmlspecialchars($device['device_name']); ?>
                <button onclick="controlDevice(<?php echo $device['id']; ?>, 'on')">On</button>
                <button onclick="controlDevice(<?php echo $device['id']; ?>, 'off')">Off</button>
                <span id="status-<?php echo $device['id']; ?>">Status: <?php echo htmlspecialchars($device['status']); ?></span>
            </li>
        <?php endforeach; ?>
    </ul>
</main>

<script src="../js/scripts.js"></script>

<?php include 'footer.php'; ?>

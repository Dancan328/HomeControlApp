<?php
// php/control_device.php
session_start();
include 'database.php';

if (!isset($_SESSION['user_id'])) {
    die('Unauthorized');
}

$device_id = $_POST['device_id'];
$action = $_POST['action'];

// Insert log entry
$stmt = $pdo->prepare("INSERT INTO logs (device_id, action) VALUES (?, ?)");
$stmt->execute([$device_id, $action]);

// Update the device status
$stmt = $pdo->prepare("UPDATE devices SET status = ? WHERE id = ?");
$stmt->execute([$action, $device_id]);

// Placeholder function - implement device control logic
function sendCommandToDevice($device_id, $action) {
    // Device control code here
}

sendCommandToDevice($device_id, $action);

echo "Device $device_id action $action executed.";
?>

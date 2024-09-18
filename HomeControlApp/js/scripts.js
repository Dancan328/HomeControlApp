// js/scripts.js
function controlDevice(deviceId, action) {
    fetch('../php/control_device.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: `device_id=${deviceId}&action=${action}`,
    })
    .then(response => response.text())
    .then(data => {
        alert(data);
        // Update the status span text to reflect the action
        document.getElementById(`status-${deviceId}`).textContent = `Status: ${action}`;
    })
    .catch(error => {
        console.error('Error:', error);
    });
}

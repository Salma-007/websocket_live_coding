<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real-Time Notifications</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    <div id="notifications" style="margin: 20px; padding: 10px; border: 1px solid #ccc;">
        <h2>Notifications</h2>
        <!-- Notifications will appear here dynamically -->
    </div>

    <button onclick="sendNotification()">Send Notification</button>

    <script>
        function sendNotification() {
            fetch('/send-notification')
                .then(response => response.json())
                .then(data => console.log(data));
        }
    </script>
</body>
</html>
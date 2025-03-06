<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifications en Temps Réel</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    <h1>Notifications en Temps Réel</h1>

    <div id="notifications" style="margin: 20px; padding: 10px; border: 1px solid #ccc;">
        <h2>Notifications</h2>
        <!-- Les notifications apparaîtront ici -->
    </div>

    <button onclick="sendNotification()">Envoyer une Notification</button>

    <script>
        function sendNotification() {
            fetch('/send-notification')
                .then(response => response.text())
                .then(data => console.log(data));
        }
    </script>
</body>
</html>
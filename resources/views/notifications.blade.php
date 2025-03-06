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
        async function sendNotification() {
            if (Notification.permission !== 'granted') {
                const permission = await Notification.requestPermission();
                if (permission !== 'granted') {
                    alert('Please allow notifications to receive updates');
                    return;
                }
            }
    
            // Send the request to the server !!
            try {
                const response = await fetch('/send-notification');
                const data = await response.json();
                
                // Create browser notification
                if (data.message) {
                    new Notification('Real-time Notification', {
                        body: data.message,
                    });
                    
                    // Also update the notifications div
                    const notificationsDiv = document.getElementById('notifications');
                    const notification = document.createElement('div');
                    notification.textContent = data.message;
                    notificationsDiv.appendChild(notification);
                }
            } catch (error) {
                console.error('Error sending notification:', error);
            }
        }
    
        document.addEventListener('DOMContentLoaded', () => {
            if (Notification.permission !== 'granted') {
                Notification.requestPermission();
            }
        });
    </script>
</body>
</html>
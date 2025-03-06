<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifications en temps réel</title>
</head>
<body>
    <h1>Notifications en temps réel</h1>
    <ul id="notifications"></ul>

    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        window.Echo.channel('notifications')
            .listen('NotificationEvent', (e) => {
                const notificationList = document.querySelector('#notifications');
                const newNotification = document.createElement('li');
                newNotification.textContent = e.message;
                notificationList.appendChild(newNotification);
            });
    </script>
</body>
</html>
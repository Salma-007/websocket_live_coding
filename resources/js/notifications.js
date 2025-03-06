// resources/js/notifications.js
window.Echo.channel('notifications')
    .listen('NotificationEvent', (e) => {
        console.log(e.message);
        const notificationElement = document.createElement('div');
        notificationElement.innerText = e.message;
        document.getElementById('notifications').appendChild(notificationElement);
    });
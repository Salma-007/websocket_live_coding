import './bootstrap';
import './notifications';   

import Echo from "laravel-echo";
import Pusher from "pusher-js";

window.Pusher = Pusher;

window.Echo = new Echo({
    broadcaster: 'pusher',
    key: import.meta.env.VITE_PUSHER_APP_KEY,
    cluster: import.meta.env.VITE_PUSHER_APP_CLUSTER,
    forceTLS: true
});

window.Echo.channel('notifications')
    .listen('RealTimeNotification', (e) => {
        console.log('Notification reçue :', e.message);

        // Afficher la notification dans l'UI
        const notificationElement = document.createElement('div');
        notificationElement.innerText = e.message;
        document.getElementById('notifications').appendChild(notificationElement);
    });

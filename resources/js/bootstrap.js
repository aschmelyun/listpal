window._ = require('lodash');

try {
    window.$ = window.jQuery = require('jquery');
    require('bootstrap');
} catch (e) {}


window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

let token = document.head.querySelector('meta[name="csrf-token"]');
if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}

window.hash = '';
let hash = document.head.querySelector('meta[name="list-hash"]');
if (hash) {
    window.hash = hash.content;
}

import Echo from 'laravel-echo'

window.Pusher = require('pusher-js');

window.Echo = new Echo({
    broadcaster: 'pusher',
    key: process.env.MIX_PUSHER_APP_KEY,
    wsHost: window.location.hostname,
    wsPort: 6001,
    disableStats: true,
    encrypted: false,
    enabledTransports: ['ws', 'wss']
});

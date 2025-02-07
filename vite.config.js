import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/assets/css/app.css', 'resources/assets/js/app.js'],
            refresh: true,
        }),
    ],
    server: {
        cors: true, // فعال کردن CORS
        headers: {
            'Access-Control-Allow-Origin': '*', // اجازه دسترسی به تمام دامنه‌ها
        },
    },
});







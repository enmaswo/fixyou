import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    server: {
        https: false, // Pastikan ini false untuk HTTP
        host: 'localhost',
        port: 5173
    },
    plugins: [
        laravel({
            input: [
                'resources/css/styles.css',
                'resources/js/app.js',
                'resources/css/nav.css',
                'resources/css/3d.css',
                'resources/css/card.css'
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
});

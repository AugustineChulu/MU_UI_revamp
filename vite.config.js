import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

const hostIP = process.env.VITE_DEV_HOST || 'localhost';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/js/app.js',
                'resources/js/landing_page.js',
            ],
            refresh: true,
        }),
    ],
    server: {
        host: '0.0.0.0',
        port: 5173,
        strictPort: true,
        hmr: {
            host: hostIP,
        },
        cors: true,  // Enable CORS support for all origins
    },
});

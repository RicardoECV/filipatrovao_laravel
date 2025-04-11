import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
                'resources/css/style_app.css',
                'resources/css/style_backoffice.css',
                'public/fonts/stylesheet.css'
            ],
            refresh: true,
        }),
    ],
});

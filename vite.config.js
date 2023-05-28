import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/js/bootstrap.js',
            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            // 'select2': 'select2/dist/js/select2.min.js',
            // 'select2-css': 'select2/dist/css/select2.min.css',
            // 'jquery': 'jquery/dist/jquery.min.js',
        },
      },
});

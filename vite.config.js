import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/main.scss',
                'resources/sass/app.scss',
                'resources/js/oneui/app.js',
                'resources/js/app.js',
                'resources/js/custom/step1.js',
                'resources/js/custom/step2.js',
            ],
            refresh: true,
        }),
    ],
});

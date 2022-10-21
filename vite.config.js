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
                'resources/js/custom/steps/step1.js',
                'resources/js/custom/steps/step2.js',
                'resources/js/custom/steps/step3.js',
                'resources/js/custom/steps/step4.js',
            ],
            refresh: true,
        }),
    ],
});

import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue'

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'Modules/Front/resources/assets/css/app.css',
                'Modules/Front/resources/assets/js/app.js',
                'Modules/User/resources/assets/css/app.css',
                'Modules/User/resources/assets/js/app.js',
                'Modules/Admin/resources/assets/css/app.css',
                'Modules/Admin/resources/assets/js/app.js',
            ],
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false
                }
            }
        }),
    ],
});

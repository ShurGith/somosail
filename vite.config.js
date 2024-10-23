import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/estilos.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
    build:{
        minify: true,
        sourcemap: false,

        rollupOptions:{
            output:{
                manualChunks(id){
                    return  "all";
                }
            }
        }

    }
});

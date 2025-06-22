import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/style.css',        // Tu CSS principal (inicio, tienda, menú)
                'resources/css/auth.css',         // Nuevo CSS para login, register, forgot-password
                'resources/js/app.js',            // Archivo JavaScript principal
                'resources/css/promo.css',        //CSS de vista de promociones 
                'resources/js/promo.js',          //Java para promociones 
                'resources/js/subpro.js',          //Java para subir promos                                               
                'resources/css/subpro.css'        //Estilo de promotion                          
            ],
            refresh: true,
        }),
    ],
});

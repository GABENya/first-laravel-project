import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/css/bootstrap.min.css',
                'resources/css/font-awesome.min.css',
                'resources/css/magnific-popup.css',
                'resources/js/app.js',
                'resources/js/js/jquery.js',
                'resources/js/js/bootstrap.min.js',
                'resources/js/particles.min.js',

                // <script src="js/jquery.js"></script>
                // <script src="js/bootstrap.min.js"></script>
                // <script src="js/particles.min.js"></script>
                // <script src="js/app.js"></script>
                // <script src="js/jquery.parallax.js"></script>
                // <script src="js/smoothscroll.js"></script>
                // <script src="js/custom.js"></script>

            ],
            refresh: true,
        }),
    ],
});

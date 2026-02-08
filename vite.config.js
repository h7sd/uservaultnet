import { defineConfig } from 'vite';
import vue from '@vitejs/plugin-vue';
import fs from 'fs';
import tailwindcss from "@tailwindcss/vite";

const { VITE_LOG_BUILD_WARNINGS } = process.env;

// Remove NODE_ENV from process.env before Vite reads it to avoid
// "NODE_ENV=production is not supported in the .env file" errors.
delete process.env.NODE_ENV;

// Detect if we're running in standalone mode (no Laravel backend / v0 preview)
// by checking if laravel-vite-plugin is available.
let laravelPlugin = null;
try {
    const laravel = await import('laravel-vite-plugin');
    laravelPlugin = laravel.default;
} catch (e) {
    // laravel-vite-plugin not available, running in standalone mode
}

const isStandalone = !laravelPlugin || process.env.VITE_STANDALONE === 'true';

const plugins = [
    tailwindcss(),
    vue({
        template: {
            compilerOptions: {
                isCustomElement: tag => tag.startsWith('swiper-')
            }
        }
    }),
];

if (!isStandalone && laravelPlugin) {
    plugins.push(
        laravelPlugin({
            input: [
                'resources/js/spa/apps/desktop/bootstrap/application.js',
                'resources/js/spa/apps/mobile/bootstrap/application.js',

                // Business CSS/JS files
                'resources/css/business/main.css',
                'resources/js/business/main.js',

                // Desktop CSS files
                'resources/css/spa/apps/desktop/main.css',
                'resources/css/spa/apps/desktop/auth.css',

                'resources/css/spa/apps/mobile/main.css',

                'resources/fonts/sf-pro/stylesheet.css',
                'resources/fonts/sf-mono/stylesheet.css',

                // Document CSS
                'resources/css/document/main.css',
                'resources/js/document/main.js',

                'resources/css/admin/main.css',
                'resources/js/admin/main.js',
                
                'resources/js/mpa/apexcharts.js',
                'resources/js/mpa/rich.editor.js',
                'resources/css/mpa/rich.editor.css'
            ],
            refresh: true
        })
    );
}

plugins.push({
    name: 'build-number',
    buildStart() {
        // Generate a random build number and save it to the storage/frontend/build.num file
        // This is used to prevent caching of the build none packed with vite like dark theme css file.
        const dir = './storage/frontend';
        if (!fs.existsSync(dir)) {
            fs.mkdirSync(dir, { recursive: true });
        }
        fs.writeFileSync(`${dir}/build.num`, Math.floor(Math.random() * 1000000).toString());
    }
});

export default defineConfig({
    plugins,
    resolve: {
        alias: {
            '@': '/resources/js/spa',
            '@D': '/resources/js/spa/apps/desktop',
            '@M': '/resources/js/spa/apps/mobile',
        }
    },
    server: {
        port: 5173,
        strictPort: true,
        host: '0.0.0.0',
        hmr: {
            host: 'localhost',
            port: 5173,
            overlay: false,
        }
    },
    css: {
        // Include resources directory for CSS @import resolution
        preprocessorOptions: {}
    },
    esbuild: {
        supported: {
            'top-level-await': true
        }
    },
    build: {
        rollupOptions: {
            onwarn: function(warning, warn) {
                if (VITE_LOG_BUILD_WARNINGS) {
                    const today = new Date().toISOString().slice(0, 10);
                    const logFile = `./node/npm/build-logs/${today}.log`;
    
                    fs.appendFileSync(logFile, warning.message);
                };
            }
        }
    }
});

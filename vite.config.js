import { createVuePlugin } from 'vite-plugin-vue2';

export default ({ command }) => ({
    base: command === 'serve' ? '' : '/build/',

    publicDir: 'fake_dir',

    build: {
        outDir: 'public/build',

        rollupOptions: {
            input: [
                'resources/js/app.js'
            ]
        }
    },

    plugins: [createVuePlugin()]

});

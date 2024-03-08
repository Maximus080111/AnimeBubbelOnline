import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                phantomRed: '#E63946',
                tropicalPurple: '#9381FF',
                whiteSmoke: '#F5F5F5',
            },
            minHeight: {
                'screen-80': '80vh',
            },
        },
    },

    plugins: [forms],
};

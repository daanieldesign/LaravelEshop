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
                primary: '#3490dc', // Například primární modrá barva
                secondary: '#ffed4a', // Sekundární žlutá barva
                accent: '#38b2ac', // Akcentní barva
                background: '#f7fafc', // Světle šedá pro pozadí
                // Přidejte další barvy podle potřeby
            },
        },
    },

    plugins: [
        forms,
        require('@tailwindcss/line-clamp'),
    ],
};

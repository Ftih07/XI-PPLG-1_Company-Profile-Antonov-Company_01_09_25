import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Poppins', 'sans-serif'], // mengganti font sans default ke Poppins
                poppins: ['Poppins', 'sans-serif'], // opsi lain, nama custom 'poppins'
            },
            scrollBehavior: {
                smooth: 'smooth',
            },
        },
    },
    plugins: [],
};

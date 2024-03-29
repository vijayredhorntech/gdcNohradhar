/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {},
        colors: {
            darkTheme: '#3A4D39',
            darkText: '#3A4D39',

            lightTheme: '#ECE3CE',
            lightText: '#ECE3CE',



            danger: '#e01212',
            success: '#08b208',
            warning: '#e0a012',
            white: '#ffffff',
            black: '#000000',
        },
    },
    plugins: [],
}

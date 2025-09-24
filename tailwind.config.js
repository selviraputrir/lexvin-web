/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
    ],
    theme: {
        extend: {
            colors: {
                'wine': '#451425',
                'navy-dark': '#0D1B2A',
                'ivory-white': '#FDFDFB',
                'gold-accent': '#DED800',
            },
            
            fontFamily: {
                'serif': ['Vogue', 'serif'],
                'sans': ['Inter', 'sans-serif'],
            },
        },
    },
    plugins: [],
}
/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./resources/**/*.blade.php", "./resources/**/*.js"],
    theme: {
        extend: {
            colors: {
                vino: "#8B2D3A",
                crema: "#FAF6F1",
                arena: "#F1E8DF",
                cafe: "#231815",
            },
            fontFamily: {
                serif: ['"Playfair Display"', "Georgia", "serif"],
                sans: ["Inter", "system-ui", "sans-serif"],
            },
        },
    },
    plugins: [],
};

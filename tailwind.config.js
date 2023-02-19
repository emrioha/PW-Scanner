/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                primary: "#043A7B",
                secondary: "#ABB9C9",
                gray: "#EBEBEB",
            },
            fontFamily: {
                poppins: "Poppins",
            },
        },
    },
    plugins: [],
};

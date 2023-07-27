/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            colors: {
                primary: "#9333ea",
            },
            container: {
                center: true,
                padding: "1rem",
            },
        },
    },
    plugins: [require("flowbite/plugin")],
};

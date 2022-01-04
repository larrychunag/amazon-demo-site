module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            backgroundImage: {
                "header-img": "url('/images/header-img.jpg')",
            },
            height: {
                128: "32rem",
            },
        },
    },
    plugins: [],
};

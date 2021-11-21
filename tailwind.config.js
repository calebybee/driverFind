module.exports = {
    purge: ["./resources/views/**/*.blade.php", "./resources/css/**/*.css"],
    theme: {
        extend: {
            backgroundImage: {
                "main-page":
                    "url('https://www.tesla.com/sites/default/files/images/semi/reveal-social.jpg')",
            },
        },
    },
    variants: {},
    plugins: [require("@tailwindcss/ui")],
};

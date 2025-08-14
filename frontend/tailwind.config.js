// frontend/tailwind.config.js
export default {
    content: [
        './components/**/*.{vue,js,ts}',
        './layouts/**/*.vue',
        './pages/**/*.vue',
        './plugins/**/*.{js,ts}',
        './app.vue',
        './nuxt.config.{js,ts}',
    ],
    theme: {
        extend: {},
    },
    plugins: [
        require('tailwindcss-primeui'),
    ],
}

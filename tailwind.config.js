/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "resources/**/*vue.js"
  ],
  theme: {
    extend: {
      colorss: {
        primary: '8rem'
      }
    },
  },
  plugins: [],
}

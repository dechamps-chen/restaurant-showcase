/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './index.php',
    './public/**/*.{html,js,php}',
    './Views/**/*.{html,js,php}',
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/forms'),
    require('flowbite/plugin')
  ],
}


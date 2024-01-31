/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './index.php',
    './public/**/*.{html,js,php}',
    './Views/**/*.{html,js,php}'
  ],
  theme: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
}


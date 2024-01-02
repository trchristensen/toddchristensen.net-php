/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './src/**/*.{html,js,php}', // Watches your HTML, JS, and PHP files in the src directory
    './views/**/*.blade.php', // Watches all your Blade PHP files in the views directory and subdirectories
  ],
  theme: {
    extend: {},
  },
  daisyui: {
    themes: ['light', 'dark', 'sunset'],
  },
  plugins: [require('daisyui'), require('@tailwindcss/typography')],
}

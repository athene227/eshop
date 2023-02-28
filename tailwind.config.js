const plugin  = require('tailwindcss/plugin');

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue"
  ],
  theme: {
    extend: {
        colors: {
            'darkblue': {
                DEFAULT: '#24419A',
                dark: '#2441A9',
            }
        }
    },
  },
  plugins: [
    plugin(function({ addUtilities, addComponents, e, config}) {
        addComponents({
            'input': {
                'padding': '8px'
            }
        });
    })
  ],
}

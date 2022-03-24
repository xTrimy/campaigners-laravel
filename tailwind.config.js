const { colors } = require('tailwindcss/defaultTheme')
const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  theme: {
    ...colors,
    extend: {
      colors:{
        lime: colors.lime,
        'light-green':{
          DEFAULT: "#8bc34a",
          '50': "#f1f8e9",
          '100': "#dcedc8",
          '200': "#c5e1a5",
          '300': "#aed581",
          '400': "#9ccc65",
          '500': "#8bc34a",
          '600': "#7cb342",
          '700': "#689f38",
          '800': "#558b2f",
          '900': "#33691e",
        }
      },
      inset: {
        '100': '100%',
      },
      fontFamily: {
        sans: ['Rockwell', ...defaultTheme.fontFamily.sans],
      },
    },
  },
  variants: {},
  plugins: [],
}

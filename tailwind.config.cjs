module.exports = {
  darkMode: 'class',
  content: [
    './resources/views/**/*.blade.php',
    './resources/js/**/*.js',
    './resources/css/**/*.css',
  ],
  theme: {
    extend: {
      colors: {
        violet: {
          50: '#f6f0ff',
          100: '#efe6ff',
          200: '#e6d6ff',
          300: '#d7baff',
          400: '#c58cff',
          500: '#a66cff',
          600: '#7f3bff',
          700: '#5a1bd6',
          800: '#3f108f',
          900: '#2a0b5a'
        }
      }
    }
  },
  plugins: [],
}

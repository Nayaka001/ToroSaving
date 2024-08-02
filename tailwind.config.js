/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  theme: {
    extend: {keyframes: {
      progress: {
        '0%': { width: '0%' },
        '100%': { width: 'var(--progress-width)' },
      },
    },
    animation: {
      progress: 'progress 2s ease-in-out forwards',
    },},
  },
  plugins: [],
}




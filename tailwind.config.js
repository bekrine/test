/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  darkMode: false,
  theme: {
    extend: {
      colors:{
        '--background-color':"rgb(236,243,243)",
        'button-color':'rgb(72,176,192)'
      }
    },
  
  },
  plugins: [],
}


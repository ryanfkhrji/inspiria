/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        poppins: ['"Poppins", sans-serif']
      },
      colors: {
        primary: "#132023",
        secondary: "#F86E27",
        bgCream: "#FDF2EC",
        bgPurple: "#EBCDE9",
        bgGreen: "#B1E0D6",
        bgYellow: "#FADE4E",
      },
      container: {
        center: true,
        padding: '20px'
      }
    },
  },
  plugins: [],
}


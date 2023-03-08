/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: "class",
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.css",
    "./storage/framework/views/*.blade.php",
  ],

  theme: {
    extend: {
      colors: {
        body: {
          light: "#E4E9F7",
          dark: "#0e1422",
        },
        primary: "#695cfe"
      },
      fontFamily: {
        Poppins: ["Poppins", "sans-serif"],
      },
    },
  },

  plugins: [],
}

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["app/view/**/*.php", "node_modules/flowbite/**/*.js"],
  theme: {
    extend: {
      fontFamily: {
        'wilkysta': ['Wilkysta'],
        'montserrat': ['Montserrat']
      },
      "colors" : {
        "main-clr" : "#EFEDEA",
        "secondary-clr" : "#1E1E1E",
        "accent-clr" : "#DEC2BA"
      }
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

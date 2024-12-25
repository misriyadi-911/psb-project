/** @type {import('tailwindcss').Config} */

const defaultTheme = require("tailwindcss/defaultTheme")

export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
  },
  plugins: [],
  theme: {
    extend: {
      fontFamily: {
        'sans': ['Montserrat', ...defaultTheme.fontFamily.sans],
      },
      colors: {
        "primary": "#27AB72",
        "secondary": '#2B6F6E',
        "custom-dark": '#333333',
        'default-border-color': '#E1E1E1',
        'semi-sky-blue': '#F2F5FB',
        'red-circle': "#FF4A3E",
        'yellow-circle': "#FFD964",
        'green-circle': "#70C686",
        'bg-box-cyan-transparent': "#D2F9F5",
        'bg-box-purple-transparent': "#DBDBEC",
        'bg-box-blue-transparent': "#CFE7FF",
        'bg-box-green-transparent': "#CEF7E8",
        'bg-box-yellow-transparent': "#FEF8CC",
        'custom-text-card': '#6B6969',
        "primary-300": "rgb(39, 171, 114,.3)",
        "primary-500": "rgb(39, 171, 114,.5)"
      }
    }
  }
}


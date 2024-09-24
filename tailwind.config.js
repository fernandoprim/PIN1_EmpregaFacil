/** @type {import('tailwindcss').Config} */
export default {
  content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
    ],
  theme: {
    extend: {
        colors: {
            "black": "#151617"
        },
        fontFamily: {
            "hanken-grotesk": ["Hanken Grotesk", "sans-serif"]
        },
        fontSize: {
            "2xs": ".625rem"
        }
    },
  },
  plugins: [],
}


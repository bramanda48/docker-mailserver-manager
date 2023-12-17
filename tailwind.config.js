/** @type {import('tailwindcss').Config} */
export default {
  corePlugins: {
    preflight: false,
  },
  content: ["./resources/**/*.blade.php", "./resources/**/*.js", "./resources/**/*.vue"],
  theme: {
    extend: {},
  },
  plugins: [],
  safelist: ["error"],
};

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    screens: {
      'mobile': '500px',
       

      'tablet': '1024px',
      

      'desktop': '1280px',
      
    },
  },
  plugins: [],
}

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
       

      'tablet': '600px',
      

      'desktop': '800px',
      
    },
  },
  plugins: [],
}

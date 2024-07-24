/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./component/**/*.{php,html,js}",
    "./index.php",
    "./edit.php",
    "./comingsoon.php",
    "./DaftarSiswa.php",
    "./edit.php",
    "./hapus.php",
    "./jadwalpelajaranxi.php",
    "./Keluhan.php",
    "./login.php",
    "./Mengeluh.php",
    "./Menu.php",
    "./Menujdwl.php",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {},
  },
  plugins: [
    require('flowbite/plugin')
  ],
}


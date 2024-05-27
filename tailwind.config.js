/** @type {import('tailwindcss').Config} */
module.exports = {
  mode: 'jit', // Habilita el modo Just-In-Time (JIT) en Tailwind CSS para una compilación más rápida.
  content: [
    // Especifica las rutas de tus archivos Blade, JavaScript y Vue para purgar el CSS no utilizado en producción.
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  darkMode: 'media', // Cambia darkMode a 'media' para que se comporte igual que 'media'.
  theme: {
    extend: {
      // Aquí puedes extender o sobrescribir los estilos predeterminados de Tailwind CSS.
    },
  },
  plugins: [
    // Aquí puedes añadir plugins de terceros de Tailwind CSS.
  ],
}




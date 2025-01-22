import { defineConfig } from 'vite';

export default defineConfig({
  root: 'public', // Spécifie que la racine du projet est le dossier public
  build: {
    outDir: '../public', // Dossier de sortie des fichiers générés
    rollupOptions: {
      input: 'public/index.html', // Utiliser index.html comme point d'entrée
    },
  },
});

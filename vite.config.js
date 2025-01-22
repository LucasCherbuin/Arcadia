import { defineConfig } from 'vite';

export default defineConfig({
  root: 'public', // Spécifie que la racine du projet est le dossier public
  build: {
    outDir: '../public', // Dossier de sortie des fichiers
    rollupOptions: {
      input: 'index.php', // Fichier d'entrée
    },
  },
});

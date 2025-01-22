import { defineConfig } from 'vite';

export default defineConfig({
  root: 'public', // Définit 'public' comme dossier racine
  build: {
    outDir: '../dist', // Place les fichiers générés dans le dossier "dist" à la racine
    emptyOutDir: true, // Nettoie le dossier de sortie avant chaque build
    rollupOptions: {
      input: 'public/index.html', // Chemin relatif au fichier d'entrée HTML
    },
  },
});

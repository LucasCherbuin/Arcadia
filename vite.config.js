import { defineConfig } from 'vite';

export default defineConfig({
    root: 'public',
    build: {
      outDir: '../public/', // Dossier de sortie
      rollupOptions: {
        input: 'index.html', // fichier d'entrée
    },
  },
});

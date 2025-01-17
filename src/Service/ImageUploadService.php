<?php

namespace App\Service;

use Symfony\Component\HttpFoundation\File\UploadedFile;

class ImageUploadService
{
    private string $animauxDirectory;
    private string $habitatsDirectory;
    private string $servicesDirectory;

    public function __construct(
        string $animauxDirectory,
        string $habitatsDirectory,
        string $servicesDirectory
    ) {
        $this->animauxDirectory = $animauxDirectory;
        $this->habitatsDirectory = $habitatsDirectory;
        $this->servicesDirectory = $servicesDirectory;
    }

    public function upload(UploadedFile $file, string $type): string
    {
        // Déterminer le répertoire cible
        $targetDirectory = match ($type) {
            'animaux' => $this->animauxDirectory,
            'habitats' => $this->habitatsDirectory,
            'services' => $this->servicesDirectory,
            default => throw new \InvalidArgumentException('Type de fichier non valide.'),
        };

        // Générer un nom de fichier unique
        $fileName = uniqid() . '.' . $file->guessExtension();

        try {
            // Créer le répertoire s'il n'existe pas
            if (!is_dir($targetDirectory)) {
                mkdir($targetDirectory, 0777, true);
            }

            // Déplacer le fichier vers le répertoire cible
            $file->move($targetDirectory, $fileName);
        } catch (\Exception $e) {
            throw new \RuntimeException('Erreur lors du téléchargement de l\'image.');
        }

        // Retourner le chemin relatif pour la base de données
        return "uploads/{$type}/{$fileName}";
    }
}

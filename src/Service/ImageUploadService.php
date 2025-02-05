<?php
namespace App\Service;

use Symfony\Component\HttpFoundation\File\UploadedFile;

//service pour uploader une image pour les entités spécifié

class ImageUploadService
{
    private array $directories;

    public function __construct(array $directories)
    {
        $this->directories = $directories;
    }

    public function upload(UploadedFile $file, string $type): string
    {
        // Vérification de la validité du type
        if (!isset($this->directories[$type])) {
            throw new \InvalidArgumentException("Le type '$type' n'est pas valide.");
        }

        // Déterminer le répertoire cible en fonction du type
        $targetDirectory = $this->directories[$type];

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
            throw new \RuntimeException('Erreur lors du téléchargement de l\'image : ' . $e->getMessage());
        }

        // Retourner le chemin relatif pour la base de données
        return "{$fileName}";
    }

    public function delete(string $fileName, string $type): void
{
    if (!isset($this->directories[$type])) {
        throw new \InvalidArgumentException("Le type '$type' n'est pas valide.");
    }

    $filePath = $this->directories[$type] . '/' . $fileName;

    if (file_exists($filePath)) {
        unlink($filePath);
    }
}

}

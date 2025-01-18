<?php

namespace App\Service;

use Symfony\Component\HttpFoundation\File\UploadedFile;

class ImageUploadService
{
    private array $directories;

    public function __construct(array $directories)
    {
        $this->directories = $directories;
    }

    public function upload(UploadedFile $imageFile, string $type): string
    {
        if (!isset($this->directories[$type])) {
            throw new \InvalidArgumentException("Le type '$type' n'est pas valide.");
        }

        $uploadDirectory = $this->directories[$type];
        $newFilename = uniqid() . '.' . $imageFile->guessExtension();
        $imageFile->move($uploadDirectory, $newFilename);

        return $newFilename;
    }
}

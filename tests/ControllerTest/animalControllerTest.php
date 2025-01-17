<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Animal;
use App\Entity\Race;
use App\Entity\Habitat;
use App\Entity\Image;

class animalControllerTest extends WebTestCase
{
    // Utilisé pour configurer les données de test
    protected static function getEntityManager(): EntityManagerInterface
    {
        return static::getContainer()->get(EntityManagerInterface::class);
    }

    /**
     * Test de la récupération des articles
     */
    public function testGetArticles()
    {
        $client = static::createClient();
        $client->request('GET', '/api/animal');

        // Vérifiez que le code de statut HTTP est OK (200)
        $this->assertResponseStatusCodeSame(Response::HTTP_OK);

        // Vérifiez que la réponse est bien au format JSON
        $this->assertJson($client->getResponse()->getContent());
    }

    /**
     * Test de la création d'un article
     */
    public function testCreateAnimal()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/animal/new');

        // Vérifiez que le formulaire est affiché
        $this->assertResponseStatusCodeSame(Response::HTTP_OK);

        // Remplir le formulaire avec des données
        $form = $crawler->filter('form')->first()->form();
        $form['animal[prenom]'] = 'Test Animal';
        $form['animal[etat]'] = 'bonne santé';

        // Soumettre le formulaire
        $client->submit($form);

        // Vérifiez que le statut de la réponse est redirigé (301 ou 302)
        $this->assertResponseRedirects('/animal/success'); // Vérifiez l'URL de redirection

        // Suivre la redirection et vérifier que l'article a été enregistré dans la base de données
        $client->followRedirect();
        $this->assertSelectorTextContains('h1', 'animal créé avec succès'); // Vérifiez un message de succès sur la page
    }

    /**
     * Test de la récupération d'un article spécifique
     */
    public function testGetSpecificArticle()
    {
        $entityManager = $this->getEntityManager();

        // Créer un article temporaire pour le test
        $animal = new Animal();
        $animal->setPrenom('prenom animal')
               ->setEtat('Etat de animal');

        $race = new Race();
        $race->setLabel('race');

        $habitat = new Habitat();
        $habitat->setNom('nom');
        
        $image = new Image();
        $image->setPath('image');

        $entityManager->persist($animal);
        $entityManager->flush();

        // Effectuer une requête pour cet article
        $client = static::createClient();
        $client->request('GET', '/api/animal/' . $animal->getId());

        // Vérifiez que le code de statut HTTP est OK (200)
        $this->assertResponseStatusCodeSame(Response::HTTP_OK);
        $this->assertJsonStringEqualsJsonString(
            json_encode([
                'id' => $animal->getId(),
                'race_id' => $race->getLabel(),
                'habitat_id' => $habitat->getNom(),
                'image_id' => $image->getPath(),
                'prenom' => 'prenom',
                'etat' => 'etat',
            ]),
            $client->getResponse()->getContent()
        );

        // Nettoyer les données après le test (facultatif)
        $entityManager->remove($animal);
        $entityManager->flush();
    }
}
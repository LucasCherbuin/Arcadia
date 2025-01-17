<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Veterinaire;
use App\Entity\Animal;

class veterinaireControllerTest extends WebTestCase
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
        $client->request('GET', '/api/veterinaire');

        // Vérifiez que le code de statut HTTP est OK (200)
        $this->assertResponseStatusCodeSame(Response::HTTP_OK);

        // Vérifiez que la réponse est bien au format JSON
        $this->assertJson($client->getResponse()->getContent());
    }

    /**
     * Test de la création d'un article
     */
    public function testCreateArticle()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/veterinaire/new');

        // Vérifiez que le formulaire est affiché
        $this->assertResponseStatusCodeSame(Response::HTTP_OK);

        // Remplir le formulaire avec des données
        $form = $crawler->filter('form')->first()->form();
        $form['veterinaire[date]'] = 'date';
        $form['veterinaire[detail]'] = 'detail';

        // Soumettre le formulaire
        $client->submit($form);

        // Vérifiez que le statut de la réponse est redirigé (301 ou 302)
        $this->assertResponseRedirects('/veterinaire/success'); // Vérifiez l'URL de redirection

        // Suivre la redirection et vérifier que l'article a été enregistré dans la base de données
        $client->followRedirect();
        $this->assertSelectorTextContains('h1', 'Article veterianire créé avec succès'); // Vérifiez un message de succès sur la page
    }

    /**
     * Test de la récupération d'un article spécifique
     */
    public function testGetSpecificArticle()
    {
        $entityManager = $this->getEntityManager();

        // Créer un article temporaire pour le test
        $veterinaire = new Veterinaire();
        $veterinaire->setDate(new \DateTime)
                    ->setDetail('detail');

        $animal = new Animal();
        $animal->setPrenom('leo');

        $entityManager->persist($veterinaire);
        $entityManager->flush();

        // Effectuer une requête pour cet article
        $client = static::createClient();
        $client->request('GET', '/veterinaire' . $veterinaire->getId());

        // Vérifiez que le code de statut HTTP est OK (200)
        $this->assertResponseStatusCodeSame(Response::HTTP_OK);
        $this->assertJsonStringEqualsJsonString(
            json_encode([
                'id' => $veterinaire->getId(),
                'animal_id' => $animal->getId(),
                'date' => $veterinaire->getDate()->format('m-d'),
                'detail' => $veterinaire->getDetail(),

            ]),
            $client->getResponse()->getContent()
        );

        // Nettoyer les données après le test (facultatif)
        $entityManager->remove($veterinaire);
        $entityManager->flush();
    }
}
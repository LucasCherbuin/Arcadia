<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PagesControllerTest extends WebTestCase
{
    public function testAccueilPage()
    {
        $client = static::createClient();

        // Accéder à la page d'accueil
        $crawler = $client->request('GET', '/');

        // Vérifier que la réponse est correcte
        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', 'Bienvenue au Zoo d\'Arcadia'); // Exemple d'élément attendu
    }

    public function testHabitatVisiteurPage()
    {
        $client = static::createClient();

        // Accéder à la page des habitats
        $crawler = $client->request('GET', '/habitatVisiteur');

        // Vérifier que la réponse est correcte
        $this->assertResponseIsSuccessful();
        $this->assertSelectorExists('.habitat-card'); // Vérifie qu'il y a des cartes d'habitat
    }

    public function testIncrementClick()
    {
        $client = static::createClient();

        // Simuler un clic sur un animal avec l'ID 1
        $client->request('POST', '/animal/click/1');

        // Vérifier la réponse JSON
        $this->assertResponseIsSuccessful();
        $this->assertJson($client->getResponse()->getContent());

        $responseData = json_decode($client->getResponse()->getContent(), true);
        $this->assertArrayHasKey('clicks', $responseData); // Vérifier que la clé "clicks" existe
    }

    public function testContactFormSubmission()
    {
        $client = static::createClient();

        // Accéder à la page de contact
        $crawler = $client->request('GET', '/contact');

        // Soumettre le formulaire
        $form = $crawler->selectButton('Envoyer')->form([
            'contact[email]' => 'test@example.com',
            'contact[Titre]' => 'Demande de test',
            'contact[votre_demande]' => 'Ceci est une demande de test.',
        ]);
        $client->submit($form);

        // Vérifier la redirection après la soumission
        $this->assertResponseRedirects('/contact');

        // Suivre la redirection et vérifier le message flash
        $client->followRedirect();
        $this->assertSelectorTextContains('.flash-success', 'Votre demande a été envoyée avec succès.');
    }
}

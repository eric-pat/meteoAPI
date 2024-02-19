<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\DecodingExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class IpLocationService
{
    private HttpClientInterface $client;

    // Injectez HttpClientInterface pour pouvoir envoyer des requêtes HTTP
    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
    }

    /**
     * @throws TransportExceptionInterface
     * @throws ServerExceptionInterface
     * @throws RedirectionExceptionInterface
     * @throws DecodingExceptionInterface
     * @throws ClientExceptionInterface
     */
    public function getCityByIp($ip)
    {
        // Utilisez une adresse IP publique pour les tests en environnement de développement
        if ($this->isDevelopment()) {
            $ip = '78.224.73.64'; // Adresse IP publique de Google
        }

        // Utilisez l'API ip-api avec l'adresse IP pour obtenir les informations de localisation
        $response = $this->client->request('GET', 'http://ip-api.com/json/' . $ip);

        // Convertir la réponse en tableau associatif 
        $locationData = $response->toArray();

        // Retourne le nom de la ville
        return $locationData['city'];
    }

    public function isDevelopment(): bool
    {
        return $_SERVER['APP_ENV'] === 'dev';
    }
}
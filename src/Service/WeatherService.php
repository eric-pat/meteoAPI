<?php

namespace App\Service;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class WeatherService
{
    private Client $client;

    public function __construct()
    {
        $this->client = new Client();
    }

    public function getWeatherData($city)
    {
        $apiKey = '4bfeb3aeb741b4cbc0f7471896cdd9bd'; // Remplacez ceci par votre propre clé API
        $url = "https://api.openweathermap.org/data/2.5/weather?q=$city&lang=fr&appid=$apiKey";

        try {
            $response = $this->client->get($url);
            return json_decode($response->getBody()->getContents(), true);
        } catch (\Exception $e) {
            // Gérer les erreurs ici
            return null;
        } catch (GuzzleException $e) {
            return null;
        }

    }
}

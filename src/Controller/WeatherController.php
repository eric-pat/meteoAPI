<?php

namespace App\Controller;


use App\Service\IpLocationService;
use App\Service\WeatherService;
use DateTime;
use DateTimeZone;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\DecodingExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;


class WeatherController extends AbstractController
{
    private IpLocationService $ipLocationService;
    private WeatherService    $weatherService;

    public function __construct(IpLocationService $ipLocationService, WeatherService $weatherService)
    {
        $this->ipLocationService = $ipLocationService;
        $this->weatherService = $weatherService;
    }

    /**
     * @throws Exception
     */
    #[Route('/', name: 'app_weather')]
    public function index(Request $request): Response
    {
        $ip = $request->getClientIp();
        $city = 'Paris'; // ville par défaut

        try {
            $city = $this->ipLocationService->getCityByIp($ip);
        } catch (ClientExceptionInterface|DecodingExceptionInterface|RedirectionExceptionInterface|ServerExceptionInterface|TransportExceptionInterface $e) {
        }
        $weatherData = $this->weatherService->getWeatherData($city);

        $date = new DateTime('now', new DateTimeZone('Europe/Paris'));

        return $this->render('weather/index.html.twig', [
            'weather_data' => $weatherData,
            'date_time' => $date->format('Y-m-d H:i:s'),
        ]);
    }

}



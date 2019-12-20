<?php

namespace App\Services;

use App\Services\Contracts\LocationServiceInterface;
use GeoIp2\Model\City;
use App\Services\Contracts\GeoIpClientInterface;


/**
 * Class LocationService
 * @package App\Services
 */
class LocationService implements LocationServiceInterface
{
    private $geoIpClient;

    public function __construct(GeoIpClientInterface $geoIpClient)
    {
        $this->geoIpClient = $geoIpClient;
    }

    /**
     * @inheritDoc
     */
    public function getCityByIp(string $ip): City
    {
        return $this->geoIpClient->getCityByIp($ip);
    }
}



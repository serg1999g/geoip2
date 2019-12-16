<?php
namespace App\Services\Contracts;

use GeoIp2\Model\City;

/**
 * Interface LocationServiceInterface
 * @package App\Services\Contracts
 */
interface LocationServiceInterface
{
    /**
     * @param string $ip
     *
     * @return City
     */
    public function getCityByIp(string $ip): City;
}

<?php

namespace App\Services\Contracts;


/**
 * Interface GeoIpClientInterface
 * @package App\Services\Contracts
 */
interface GeoIpClientInterface
{
    public function getCityByIp(string $ip);
}

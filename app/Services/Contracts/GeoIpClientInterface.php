<?php

namespace App\Services\Contracts;


/**
 * Interface GeoIpClientInterface
 * @package App\Services\Contracts
 */
interface GeoIpClientInterface
{
    /**
     * @param string $ip
     * @return mixed
     */
    public function getCityByIp(string $ip);
}

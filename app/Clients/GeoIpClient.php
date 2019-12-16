<?php


namespace App\Clients;

use GeoIp2\Database\Reader;
use App\Services\Contracts\GeoIpClientInterface;


class GeoIpClient implements GeoIpClientInterface
{
    private $reader;

    public function __construct(Reader $reader)
    {
        $this->reader = $reader;
    }

    /**
     * @param $ip
     * @return \GeoIp2\Model\City
     * @throws \GeoIp2\Exception\AddressNotFoundException
     * @throws \MaxMind\Db\Reader\InvalidDatabaseException
     */
    public function getCityByIp(string $ip)
    {
        return $this->reader->city($ip);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Contracts\LocationServiceInterface;

/**
 * Class ShowLocationController
 * @package App\Http\Controllers
 */
class ShowLocationController extends Controller
{
    /**
     * @var LocationServiceInterface
     */
    private $locationService;

    public function __construct(LocationServiceInterface $locationService)
    {
        $this->locationService = $locationService;
    }

    public function index()
    {
        return view('index');
    }

    public function store(Request $request)
    {
        $ip = $request->ip;
        $location = $this->locationService->getCityByIp($ip);
        $city[] = $location->location->jsonSerialize();
//        dd($city);

        return view('store', ['city' => $city]);
    }
}

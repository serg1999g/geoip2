<?php

namespace App\Http\Controllers;

use App\Http\Requests\IpRequest;
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

    /**
     * ShowLocationController constructor.
     * @param LocationServiceInterface $locationService
     */
    public function __construct(LocationServiceInterface $locationService)
    {
        $this->locationService = $locationService;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('index');
    }

    /**
     * @param IpRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(IpRequest $request)
    {
        $ip = $request->ip;
        $location = $this->locationService->getCityByIp($ip);
        $city[] = $location->location->jsonSerialize();

        return response()->json($city);
    }
}

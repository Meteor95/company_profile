<?php

namespace App\Http\Controllers\EndUser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Landing extends Controller
{
    public function index()
    {
        $ipAddress = request()->ip();
        $response = Http::get("http://ipinfo.io/{$ipAddress}/json");
        $location = $response->json();
        $city = $location['city'] ?? '-';
        $region = $location['region'] ?? '-';
        $country = $location['country'] ?? '-';
        $data = [
            'ip' => $ipAddress,
            'location' => $city . ' ' . $region . ' ' . $country
        ];
        return view('halamandepan', $data);
    }
}

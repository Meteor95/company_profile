<?php

namespace App\Http\Controllers\EndUser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Landing extends Controller
{
    private function get_info_location()
    {
        $ipAddress = request()->ip();
        $response = Http::get("http://ipinfo.io/{$ipAddress}/json");
        $location = $response->json();
        $city = $location['city'] ?? '-';
        $region = $location['region'] ?? '-';
        $country = $location['country'] ?? '-';
        return [
            'ip' => $ipAddress,
            'location' => $city . ' ' . $region . ' ' . $country
        ];
    }
    public function index()
    {
        $data['info_location'] = $this->get_info_location();
        $data['use_footer'] = true;
        return view('halamandepan', $data);
    }
    public function email_profesional()
    {
        $data['info_location'] = $this->get_info_location();
        $data['use_footer'] = false;
        return view('halamanemailprofesional', $data);
    }
    public function hubungi_kami()
    {
        $data['info_location'] = $this->get_info_location();
        $data['use_footer'] = true;
        return view('hubungikami', $data);
    }
}

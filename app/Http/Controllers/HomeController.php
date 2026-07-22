<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\HeroSection;
use App\Models\Setting;

class HomeController extends Controller
{
    public function index()
    {
        $setting = Setting::first();

        $hero = HeroSection::where(
            'is_active',
            true
        )->first();

        $services = Service::query()

            ->where('is_active', true)

            ->orderBy('position')

            ->get();

        return view(
            'home',
            compact(
                'setting',
                'hero',
                'services'
            )
        );
    }
}
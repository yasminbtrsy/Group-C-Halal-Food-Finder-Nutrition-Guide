<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    protected $restaurants = [
        [
            'name' => 'Nando\'s',
            'logo' => 'assets/img/nando\'s.png',
            'description' => 'Nando\'s is a South African multinational chain that specializes in Portuguese flame-grilled peri-peri style chicken.',
            'url' => '/restaurants/nandos',
        ],
        [
            'name' => 'Yahala',
            'logo' => 'assets/img/yahala.jpg',
            'description' => 'Arabic food.',
            'url' => '/restaurants/yahala',
        ],
        [
            'name' => 'Sukiya Malaysia',
            'logo' => 'assets/img/Sukiya.jpg',
            'description' => 'Japanese Tokyo Gyudon chain, offers delicious, affordable meals with excellent service.',
            'url' => '/restaurants/sukiya',
        ],
        [
            'name' => 'Domino\'s Pizza',
            'logo' => 'assets/img/dominoss.png',
            'description' => 'Is an American multinational pizza restaurant chain founded in 1960.',
            'url' => '/restaurants/dominos',
        ],
        [
            'name' => 'NAK NAK',
            'logo' => 'assets/img/nak.png',
            'description' => 'Nak 낙 simply means JOY in Korean. “NAK NAK”, resembles the sound of someone knocking on the door, and also means “we want” in Malay. When you see NAK NAK, joy will follow you.',
            'url' => '/restaurants/naknak',
        ],
    ];

    public function showRestaurants(Request $request)
{
    // Get the search query from the request
    $query = $request->input('query');

    // If a query exists, filter the restaurants
    if ($query) {
        $filteredRestaurants = array_filter($this->restaurants, function ($restaurant) use ($query) {
            return stripos($restaurant['name'], $query) !== false;
        });

        // Pass the filtered results to the view
        return view('halalrestaurantpage', ['restaurants' => $filteredRestaurants]);
    }

    // Otherwise, show all restaurants
    return view('halalrestaurantpage', ['restaurants' => $this->restaurants]);
}

}

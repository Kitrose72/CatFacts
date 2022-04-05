<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CatFactsController extends Controller
{
    //
    function getCatFacts($limit)
    {
        if($limit == 1) {
            $response = Http::get('https://catfact.ninja/fact');
        }else {
            $response = Http::get('https://catfact.ninja/facts?limit='.$limit);
        }
        return $response->json();
    }
}

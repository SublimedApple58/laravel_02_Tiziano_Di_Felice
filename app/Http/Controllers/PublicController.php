<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    //

    public function homepage() {
        return view('welcome');
    }

    public function services() {

        $items = [
            [
                "nome" => "Organizziamo viaggi",
                "paragrafo" => "organizziamo viaggi per voi senza che vi dobbiate preoccupare di nulla",
                'img' => "https://images.unsplash.com/photo-1480714378408-67cf0d13bc1b?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            ],
            [
                "nome" => "Ti rimborsiamo se serve",
                "paragrafo" => "organizziamo viaggi per voi senza che vi dobbiate preoccupare di nulla",
                'img' => "https://images.unsplash.com/photo-1422464804701-7d8356b3a42f?q=80&w=1932&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            ],
            [
                "nome" => "Cancellazione gratuita",
                "paragrafo" => "organizziamo viaggi per voi senza che vi dobbiate preoccupare di nulla",
                'img' => "https://images.unsplash.com/photo-1570658379397-89d15db1b0de?q=80&w=1931&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            ],
            [
                "nome" => "Anche in locale",
                "paragrafo" => "organizziamo viaggi per voi senza che vi dobbiate preoccupare di nulla",
                'img' => "https://plus.unsplash.com/premium_photo-1673266203191-bb6471c95268?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            ],
        ];

        return view('services', compact('items'));
    }

    public function aboutUs() {
        return view('aboutUs');
    }
}

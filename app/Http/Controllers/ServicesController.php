<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    protected $items = [
        [
            "id" => 1,
            "nome" => "Organizziamo viaggi",
            "paragrafo" => "organizziamo viaggi per voi senza che vi dobbiate preoccupare di nulla",
            'img' => "https://images.unsplash.com/photo-1480714378408-67cf0d13bc1b?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
        ],
        [
            "id" => 2,
            "nome" => "Ti rimborsiamo se serve",
            "paragrafo" => "organizziamo viaggi per voi senza che vi dobbiate preoccupare di nulla",
            'img' => "https://images.unsplash.com/photo-1422464804701-7d8356b3a42f?q=80&w=1932&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
        ],
        [
            "id" => 3,
            "nome" => "Cancellazione gratuita",
            "paragrafo" => "organizziamo viaggi per voi senza che vi dobbiate preoccupare di nulla",
            'img' => "https://images.unsplash.com/photo-1570658379397-89d15db1b0de?q=80&w=1931&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
        ],
        [
            "id" => 4,
            "nome" => "Anche in locale",
            "paragrafo" => "organizziamo viaggi per voi senza che vi dobbiate preoccupare di nulla",
            'img' => "https://plus.unsplash.com/premium_photo-1673266203191-bb6471c95268?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
        ],
        [
            "id" => 5,
            "nome" => "Giriamo non solo in America",
            "paragrafo" => "organizziamo viaggi per voi senza che vi dobbiate preoccupare di nulla",
            'img' => "https://plus.unsplash.com/premium_photo-1673266203191-bb6471c95268?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
        ],
    ];

    //
    public function info() {
        return view('services', ['items' => $this->items]);
    }

    public function detail($id){

        foreach($this->items as $item){
            if($item["id"] == $id){
                return view('detail', ['item' => $item]);
            }
        }

        abort(404);
    }
}

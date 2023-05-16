<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class requestController extends Controller
{

private $books= [
        [
            'book'=>'Rings of fire',
            'author'=>'R R Martin'
        ],
        [
            'book'=>'Harry Potter',
            'author'=>'G K Rawling'
        ],
        [
            'book'=>'Homo Dous',
            'author'=>'Youval Noah Hariri'
        ],
        [
            'book'=>'Norozian Wood',
            'author'=>'Mukarami'
        ]

    ];

    public function books(){
        return $this->books;
    }
    public function getBooks($id){
        return  $this->books[$id];
    }

    public function firstFunction(Request $Request){
        return $Request-> books;
    }
}

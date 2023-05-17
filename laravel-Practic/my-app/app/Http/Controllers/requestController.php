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

    public function books(Request $request){

        $limit= $request->query('limit',0);
        if($limit==0){
            return $this->books;
        }else{
            return array_splice($this->books,0,$limit);
        }

    }
    public function getBooks($id){
        return  $this->books[$id];
    }

    public function getFieldBooks($id, $field){
          $book= $this->books[$id];
          return $book[$field];
    }

    public function createBook(Request $request){
        $book = $request->input(key:'book');
        $author = $request->input(key:'author');

        return "Your Book name is : {$book} and author is :{$author}";

    }








    public function firstFunction(Request $Request){
        return $Request-> books;
    }
}

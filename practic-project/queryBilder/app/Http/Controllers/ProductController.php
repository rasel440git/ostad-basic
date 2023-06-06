<?php

namespace App\Http\Controllers;

use Illuminate\Database\Query\JoinClause;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$productData= DB::table('products')->find(3);
        //$productData= DB::table('products')->count();
        //$productData= DB::table('products')->max('price');
        //$productData= DB::table('products')->sum('price');

        //$productData= DB::table('products')->select('title', 'price')->distinct()->get();

        // $productData= DB::table('products')
        //     ->join('product_details', 'products.id', '=','product_details.id')
        //     ->join('users', 'products.id', '=','users.id')
        //     ->select('users.email','products.title','products.price','product_details.des')
        //     ->get();

        $productData= DB::table('products')
            ->join('product_details',function(JoinClause $clause){
                $clause->on('products.id','=','product_details.id')
                ->where('products.price','>',3000);})
                ->orderBy('products.price','desc')
            ->get();



        return $productData;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

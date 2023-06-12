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
        //return $productData= DB::table('products')->get();
        //return $productData= DB::table('products')->first();
        // return $productData= DB::table('products')->find(2);
        // return $productData= DB::table('brands')->pluck('brandName','id');
        // return $productData= DB::table('products')->select('title','price')->distinct()->get();

        //All Join
        // $joinData = DB::table('products')
        //     ->select('products.id','products.title','.categories.categoryName','brands.brandName')
        //     ->join('categories', 'products.category_id', '=', 'categories.id')
        //     ->join('brands', 'products.brand_id', '=', 'brands.id')
        //     ->get();

        // return $joinData;



        // Left Join
        // $LefJoinData = DB::table('products')
        //     ->leftJoin('categories', 'products.category_id', '=', 'categories.id')
        //     ->leftJoin('brands', 'products.brand_id', '=', 'brands.id')
        //     ->get();

        // return $LefJoinData;


        //  //Cross Join
        //  $CrossData = DB::table('products')
        //  ->crossJoin('categories')
        //  ->crossJoin('brands')->get()
        //  ->count();

        // return $CrossData;



        //Advances Join
        // $Data = DB::table('products')
        // ->join('categories', function(JoinClause $join) {
        //     $join->on('categories.id', '=', 'products.category_id')
        //         ->where('products.price', '>', 2000);
        // })
        // ->join('brands', function(JoinClause $join) {
        //     $join->on('brands.id', '=', 'products.brand_id')
        //         ->where('brands.brandName', '=', 'Hatil');
        // })
        // ->get();

        // return $Data;

        //Union
        //   $query= DB::table('products')->where('price', '>', 2000 );
        //   $query2= DB::table('products')->where('id', '=', 2 )->get();
        //   return $result= $query2->union($query)->count();

        // return $query= DB::table('products')->whereBetween('price',[3000,4000])->get();
        // return $query= DB::table('products')->skip(16)->take(2)->get();

        //Having & Group By
        // return $query= DB::table('products')
        //         ->groupBy('price')
        //         ->having('price','>',4000)
        //         ->get();


        //Normal Insert
        // return $query= DB::table('brands')
        //         ->insert([
        //             'brandName'=>'Google',
        //             'brandImg'=>'Demo Img'
        //         ]);

        $brands = DB::table('products')
                ->where('id', 2)
                ->first();








        //$productData= DB::table('products')->count();
        //$productData= DB::table('products')->max('price');
        //$productData= DB::table('products')->sum('price');

        //$productData= DB::table('products')->select('title', 'price')->distinct()->get();

        // $productData= DB::table('products')
        //     ->join('product_details', 'products.id', '=','product_details.id')
        //     ->join('users', 'products.id', '=','users.id')
        //     ->select('users.email','products.title','products.price','product_details.des')
        //     ->get();

        // $productData= DB::table('products')
        //     ->join('product_details',function(JoinClause $clause){
        //         $clause->on('products.id','=','product_details.id')
        //         ->where('products.price','>',3000);})
        //         ->orderBy('products.price','desc')
        //     ->get();



        // return $productData;
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
        //Inser Data from user or using POSTMAN
        //  $insert= DB::table('brands')
        //                 ->insert($request->input());
        //                 if($insert !==0 ){
        //                     return "Data Insert Successfully!!!";
        //                 }
        //                 else{
        //                     return "Data Insert Faild!!!";
        //                 }


        //Another Way Inser Data from user or using POSTMAN
            // $insert= DB::table('brands')
            // ->insert([
            //     'brandName'=> $request->input('name'),
            //     'brandImg'=> $request->input('bImg')

            // ]);

            // if($insert !==0 ){
            //     return "Data Insert Successfully!!!";
            // }
            // else{
            //     return "Data Insert Faild!!!";
            // }
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
    public function update(Request $request)
    {
        return $update= DB::table('brands')
            ->where('id','=', $request->id)
            ->update( $request->input());

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

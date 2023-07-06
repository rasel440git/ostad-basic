<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function getPostData(){
        $posts = Post::with('category')->get();

    foreach ($posts as $post) {
        echo "Post Title: " . $post->title." <br>";
        echo "Post Content: " . $post->content . " <br>";
        echo "Category Name: " . $post->category->name . " <br>";
        echo " <br>";
        }
    }

    public function allPostWithTheirCategory() {
        $posts = Post::with( 'category' )->get();
        return $posts;
   
    }

    public function softDelete( Request $request ) {
        $post = Post::find( $request->id );
        if ( !$post ) {
            return response()->json( ['message' => 'Post not found'], 404 );
        }
    }    
    public function softDeletedPosts() {
        $softDeletedPosts = Post::softDeletedPosts();
        return $softDeletedPosts;
    }

    public function allpostwithcategory() {
        $posts = Post::with( 'category' )->get();
        return view( 'allpostwithcategory', compact( 'posts' ) );
    }
    public function specificCatPosts( Request $request ) {
        $posts = Post::where( 'category_id', $request->id )->get();
        return $posts;
    }

    public function eachCategoryPosts() {
        $categories = Category::all();
        return view( 'eachcategorypostloop', compact( 'categories' ) );
    }

}
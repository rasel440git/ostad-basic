<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // method one
        // Post::factory(5)->create();



        // method Two
        // Post::create([
        //     'title'        => 'sample sesond post title',
        //     'slug'         => 'slag-sesond-post-title',
        //     'excerpt'      => 'post-excerpt',
        //     'description'  => 'sesond post-descriptio ndes cripti descr description iption',
        //     'is_published' => true,
        //     'min_to_read'  => 2,
        // ]) ;



        // method Three
        $json = File::get( 'database/json/posts.json' );
        $posts = collect( json_decode( $json ) );


        $posts->each( function ( $post ) {
        Post::create( [
        "title"        => $post->title,
        "slug"         => $post->slug,
        "description"  => $post->description,
        "excerpt"      => $post->excerpt,
        "is_published" => $post->is_published,
        "min_to_read"  => $post->min_to_read,
    ] );
} );

    }
}

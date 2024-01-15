<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = config('db.posts');
        foreach($posts as $post){
            $newPost = new Post();
            $newPost ->image = PostSeeder::storeimage($post['image'],$post['title']) ;
            $newPost ->title = $post['title'] ;
            $newPost ->body = $post['body'] ;
            $newPost ->user_id = 1 ;
            $newPost ->slug = Str::slug($post['title']) ;
            $newPost->save();
        }
    }
    public static function storeimage($img,$name){
        $url = $img;
        $contents = file_get_contents($url);
        $name = Str::slug($name,'-').'.jpg';
        $path = 'images/'. $name;
        Storage::put('images/'. $name,$contents);
        return $path;
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','title','slug','body','image'];
    public static function getSlug($title){
        $slug = Str::of($title)->slug('-');
        $cont =1;
        while(Post::where("slug",$slug)->first()){
            $slug = Str::of($title)->slug('-'). "-{$count}";
            $count++;
        }
        return $slug;
    }
}

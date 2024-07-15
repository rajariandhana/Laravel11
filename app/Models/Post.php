<?php
namespace App\Models;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model{
    use HasFactory;
    protected $with = ['author','category'];
    // protected $table = 'namaTabel';
    // protected $primaryKey = 'primaryKey';
    protected $fillable = ['title','author','slug','body'];
    
    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    // public static function all(){
    //     return [
    //         [
    //             'id'=>1,
    //             'slug'=>'judul-artikel-1',
    //             'title'=>'judul 1',
    //             'author'=>'author 1',
    //             'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias impedit quidem quam consectetur a ad in sequi voluptatum optio! Temporibus fuga ea laudantium ab impedit sit modi porro maxime maiores.'

    //         ],
    //         [
    //             'id'=>2,
    //             'slug'=>'judul-artikel-2',
    //             'title'=>'judul 2',
    //             'author'=>'author 2',
    //             'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias impedit quidem quam consectetur a ad in sequi voluptatum optio! Temporibus fuga ea laudantium ab impedit sit modi porro maxime maiores.'
                
    //         ]
    //     ];
    // }
    // public static function find($slug):array{
    //    return Arr::first(static::all(), function($post) use ($slug){
    //         return $post['slug'] == $slug;
    //     });
    //     $post = Arr::first(static::all(), fn($post)=>$post['slug']==$slug);
    //     if(!$post){
    //         abort('404');
    //     }
    //     return $post;
    // }
}
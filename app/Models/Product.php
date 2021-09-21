<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Product extends Model
{
    use HasFactory;
    use Sluggable;
    protected $table = 'products';
    protected $fillable = ['category_id','title','slug','price','offer','offer_text','qty','code','description','image','status','created_by','updated_by'];


    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }




    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}

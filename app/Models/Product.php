<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $fillable = [
        'cate_id',
        'name','slug',
        'small_descreption',
        'descreption',
        'original_price',
        'selling_price',
        'image',
        'qte',
        'tax',
        'status',
        'trending',
        'meta_keys',
        'meta_desc',
        'meta_title'
    ];

    public function category(){
        return $this->belongsTo(Category::class,'cate_id','id');
    }
}

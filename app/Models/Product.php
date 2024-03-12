<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Product extends Model implements HasMedia
{
    use HasFactory, SoftDeletes, InteractsWithMedia;

    protected $guarded=[];

    // cast sizes to array
    protected $casts = [
        'sizes' => 'array'
    ];

    protected $appends = ['first_image'];

    public function getFirstImageAttribute()
    {
        return $this->getFirstMediaUrl('images');
    }

    public function productImages()
    {
        return $this->getMedia('images');
    }

    public function productCategory()
    {
        return $this->belongsTo(ProductCategory::class)->withDefault();
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }


    public static function sizes(){

        return [
            'XS','S','M','L','XL','XXL','XXXL'
        ];
    }
}

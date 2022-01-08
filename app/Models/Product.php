<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'category_id',
        'price',
        'size',
        'description',
        'image',
        'status',
        'created_at',
        'updated_at',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function setImageAttribute($image)
    {
        if (\is_array($image)) {
            $baseURL = env('GOOGLE_CLOUD_STORAGE_PATH_PREFIX');
            foreach ($image as $key => $value) {
                $image[$key] = "{$baseURL}/{$value}";
            }
            $this->attributes['image'] = json_encode($image);
        }
    }

    public function getImageAttribute($image)
    {
        return json_decode($image, true);
    }
}

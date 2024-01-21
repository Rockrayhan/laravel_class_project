<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'price', 'category_id' , 'tags', 'image' , 'availibility'  ];

    public function setTagsAttribute($value)
    {
        $this->attributes['tags'] = json_encode($value);
    } 

    public function getTagsAttribute($value)
    {
        return $this->attributes['tags'] = json_decode($value);
        // return is_array($value) ? $value : json_decode($value, true);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
        // return $this->belongsTo(Category::class, 'foriegnKey_id');
    }


}

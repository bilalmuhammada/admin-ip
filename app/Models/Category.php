<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $appends = [
        'image_url'
    ];

    public function attachment()
    {
        return $this->hasOne(Attachment::class, 'object_id')->where('object', 'Category');
    }

    public function getImageUrlAttribute()
    {
        if ($this->attachment) {
            return asset('uploads/categories') . '/' . $this->attachment->name;
        } else {
            return 'https://via.placeholder.com/30x30';
        }
    }
}
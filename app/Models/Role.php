<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $appends = [
        'allow_delete'
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function getAllowDeleteAttribute()
    {
        if ($this->users->count() == 0) {
            return true;
        }
        return false;
    }
}

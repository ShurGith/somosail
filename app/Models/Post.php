<?php

namespace App\Models;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\belongsTo;
use Illuminate\Database\Eloquent\Relations\belongsToMany;

class Post extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $casts = [
        'created_at' => 'date:Y-s-M',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function categories():belongsToMany
    {
        return $this->belongsToMany(Category::class);
    }

}

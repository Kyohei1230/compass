<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'shop_name',
        'prefecture',
        'city',
        'after_address',
        'zip_code',
        'phone_number',
        'opening_hours',
        'distance',
        'required_time',
        'body',
        'user_id',
        'category_id',
    ];
    
    public function getPaginateByLimit(int $limit_count = 2)
    {
    // updated_atで降順に並べたあと、limitで件数制限をかける
    return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    
}

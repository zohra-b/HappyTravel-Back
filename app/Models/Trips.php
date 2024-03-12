<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trips extends Model
{
    use HasFactory;
    protected $table = 'trips'; 
    protected $primaryKey = 'id'; 

    protected $fillable = [
        'title',
        'location',
        'image_path',
        'description'
    ];

    protected $hidden = [
        "created_at",
        "updated_at"
    ];

    public function getImageUrlAttribute()
    {
        // Assuming you're storing images in the public storage directory
        return asset('storage/' . $this->image_path);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}

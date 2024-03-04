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
        'image',
        'description'
    ];

    protected $hidden = [
        "created_at",
        "updated_at"
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}

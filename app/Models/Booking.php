<?php

namespace App\Models;
use App\Models\User ;
use App\Models\Tour;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_name',
        'email' ,
        'phone_number',
        'tour_id',
        'members',
        'user_id'
    ];
    
    public function tours(){
        return $this->belongsToMany(Tour::class);
    }

}

<?php

namespace App\Models;
use App\Models\Booking ;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;   
use App\Models\Comment;   
class Tour extends Model
{
    use HasFactory;
    protected $fillable = [
        'title' , 
        'description' , 
        'price' , 
        'time',
        'image' ,
        'user_id'
    ];
    public function booking(){
        return $this->hasMany(Booking::class);
    }

    public function user(){
        return $this->belongsToMany(User::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }


}

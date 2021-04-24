<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'image',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function uploadImage($image)
    {
        
        $imagename = $image->getClientOriginalName();
        (new Self())->deleteOldImage();
        request()->image->storeAs('images', $imagename , 'public');
        auth()->user()->update(['image' =>  $imagename]);
    }

    protected function deleteOldImage(){
        
        if(auth()->user()->image)
            {
                Storage::delete('/public/images/'.auth()->user()->image);
            }
    }
}

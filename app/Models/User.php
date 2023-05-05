<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'email',
        'password',
        'f_name',
        'l_name',
        'father_name',
        'national_code',
        'gender',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function profile(){
        return $this->hasOne(Profile::class);
    }
    public function classes(){
        return $this->belongsToMany(ClassRoom::class,'user_to_classes','user_id','class_id','id','id');
    }


    public function users(){
        $user=User::all();
        return $user;
    }
    public function user_class($user_id,$year){
        $user=User::find($user_id);
        return $user->classes->where('year',$year);
    }
    public function user_profile($id){
        $user=User::find($id);
        return $user->profile;
    }
    public function user_classes($user_id){
        $user=User::find($user_id);
        return $user->classes;
    }
    public function students(){
        $user=User::role(1)->get();
        return $user;
    }
    public function teachers(){
        $user=User::role(2)->get();
        return $user;
    }






    public function scopeRole($query, $type)
    {
        return $query->where('role', $type);
    }
    public function scopeGender($query, $type)
    {
        return $query->where('gender', $type);
    }
}

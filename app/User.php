<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Entities\News;
use App\Entities\Post;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'email', 
        'password',
        'fullname',
        'gender',
        'type',
        'tax',
        'remember_token',
        'reset_password_token', 
        'phone', 
        'date_of_birth',
        'avatar',
        'facebook',
        'skype',
        'zalo',
        'viber'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $with = ['address'];
    
    protected $appends = ['url_avatar', 'date_of_birth_format'];

    const PATH_AVATAR = '/avatar';

    public function getRequestResetPasswordCacheKey()
    {
        return "request_reset_password_for_user_$this->id";
    }
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function getGenderNameAttribute()
    {
        return $this->gender ? 'Nam' : 'Nữ';
    }

    public function address()
    {
        return $this->morphOne('App\Entities\Address', 'addressable');
    }

    public function getUrlAvatarAttribute()
    {
        return '/storage' . self::PATH_AVATAR . '/' . $this->avatar;
    }

    public function getDateOfBirthFormatAttribute()
    {
        return \Carbon\Carbon::parse($this->date_of_birth)->format(config('app.format.date'));
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}

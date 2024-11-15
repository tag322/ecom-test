<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Notifications\ResetPasswordNotification;
use App\Jobs\SendResetPasswordLink;

use App\Models\Basket;
use App\Models\Role;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The relationships that should always be loaded.
     *
     * @var array
     */
    protected $with = ['roles'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'google_id'
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
    
    public static function boot()
    {
        parent::boot();

        self::created(function($model){
            $model->roles()->sync([2]);
        });
    }

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function sendPasswordResetNotification($token): void
    {
        // $url = env('FRONTEND_URL').'/reset-password?token='.$token;
    
        // $this->notify(new ResetPasswordNotification($url));

        /**
         * queue version
         */

        SendResetPasswordLink::dispatch($this,$token)->onQueue('SendResetPasswordLink');

        //// php artisan queue:work --queue="SendResetPasswordLink"
    }

    // public function scopeExclude($query, $value = []) {
    //     return $query->select(array_diff($this->columns, (array) $value));
    // }

    public function hasRole($role) {
        if ($this->roles->contains('title', $role)) {
            return true;
        }
        return false;
    }

    public function basket() {
        return $this->hasOne(Basket::class, 'user_id');
    }

    public function roles() {
        return $this->belongsToMany(Role::class, 'user_roles', 'user_id', 'role_id');
    }


    //model events
    protected static function booted(): void
    {
        static::created(function (User $user) {
            $user->roles()->sync([2]);

            if(config('auth.all_users_are_admin')) {
                $user->roles()->sync([1, 2]);
            }
        });
    }
}

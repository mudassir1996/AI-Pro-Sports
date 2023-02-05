<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Client extends Model
{
    use Notifiable;
    use HasFactory;
    protected $table = "users";
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'profile_img',
        'password',
        'is_admin',
        'is_secure',
        'status',
    ];


    public function trades()
    {
        return $this->hasMany(Trade::class, 'user_id');
    }
}

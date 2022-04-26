<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StartupLogin extends Model
{
    use HasFactory;
    protected $table = 'startup_login';
    protected $fillable = [
        'is_active',
        'fullname',
        'email',
        'mobile',
        'password'
    ];

    public function startup() {
        return $this->belongsTo(Startup::class, 'startup_id', 'id');
    }
}

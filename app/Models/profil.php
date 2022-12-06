<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profil extends Model
{
    use HasFactory;

    protected $table = 'profile';

    protected $guarded = [];

    public function Profile(){
        return $this->blongTO(profile::class);
    }
}

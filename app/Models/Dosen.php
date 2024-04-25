<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    protected $table = 'dosen';

    protected $primaryKey = 'id_dosen';
    public $timestamps = false;
    public function ktd()
    {
        return $this->hasOne(Ktd::class, 'id_dosen');
    }
}

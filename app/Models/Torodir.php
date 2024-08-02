<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Torodir extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_torodir';
    protected $table = 'torodir';
    public $timestamps = false;
    protected $casts = [
        'id_torodir' => 'string',
    ];
    public function tabungan(){
        return $this->hasOne(Tabungan::class, 'id_torodir', 'id_torodir');
    }

}

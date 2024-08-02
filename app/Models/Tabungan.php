<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tabungan extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'id_tabungan';
    protected $fillable = [
        'id_tabungan',
        'nama',
        'kategori',
        'jumlah_uang',
        'tanggal_dan_waktu',
        'nama_admin'
    ];
    protected $table = 'tabungan';

    public function torodir(){
        return $this->belongsTo(Torodir::class, 'id_torodir', 'id_torodir');
    }
}

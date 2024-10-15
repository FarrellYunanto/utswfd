<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pelanggan extends Model
{
    use HasFactory;
    protected $table = 'pelanggan';

    protected $fillable = [
        'nama',
        'alamat',
        'tgl_lahir',
        'notelp'
    ];
    public $rules = [

    ];

    // public function pelanggan(){
    //     return $this->belongsTo(Pelanggan::class, 'pelanggan_id', 'id');
    // }

    public function pembelian(){
        return $this->hasMany(Pembelian::class, 'pelanggan_id', 'id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembelian extends Model
{
    use HasFactory;
    protected $table = 'pembelian';


    public function pelanggan(){
        return $this->belongsTo(pelanggan::class, 'pelanggan_id', 'id');
    }    
}

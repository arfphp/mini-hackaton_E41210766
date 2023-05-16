<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenjualanBB extends Model
{
    use HasFactory;
    //model yang berhubungan dengan table bernama penjualan_b_b_s
    protected $table = 'penjualan_b_b_s';
    //digunakan untuk mengatur apakah Laravel harus secara otomatis mengelola kolom created_at dan updated_at pada tabel terkait model ini.
    //Dalam contoh ini, nilai false menunjukkan bahwa Laravel tidak perlu mengelola kolom tersebut.
    //Jadi, tabel 'penjualan_b_b_s' tidak akan memiliki kolom created_at dan updated_at.
    public $timestamps = false;
}

<?php

namespace App\Models\Front;

use CodeIgniter\Model;

class PemesananDetailModel extends Model
{
    protected $useTimestamps = false;
    protected $table = 'pemesanan_detail';
    protected $primaryKey = 'id_cd';
    protected $allowedFields = ['id_pemesanan', 'id_barang', 'jumlah_barang', 'harga', 'total'];
    // protected $useTimestamps = false;
}

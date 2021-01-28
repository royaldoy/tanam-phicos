<?php

namespace App\Models\Front;

use CodeIgniter\Model;

class OrderModel extends Model
{
    protected $useTimestamps = true;
    protected $table = 'pemesanan';
    protected $primaryKey = 'id_pemesanan';
    protected $allowedFields = ['id_pemesanan', 'id_member', 'jumlah', 'total', 'tgl_pesan', 'status_pemesanan', 'notes'];
}

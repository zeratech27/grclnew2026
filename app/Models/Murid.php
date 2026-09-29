<?php

namespace App\Models;

use CodeIgniter\Model;

class Murid extends Model
{
    protected $table            = 'data_murid';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nama_murid', 'notelp','alamat'];

    

}

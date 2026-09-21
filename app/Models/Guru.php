<?php

namespace App\Models;

use CodeIgniter\Model;

class Guru extends Model
{
    protected $table            = 'data_guru';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nama_guru', 'notelp','alamat','role'];

    

}

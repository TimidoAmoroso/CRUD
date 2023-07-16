<?php 
namespace App\Models;

use CodeIgniter\Model;

class M_persona extends Model{
    protected $table      = 'persona';
    // Uncomment below if you want add primary key
     protected $primaryKey = 'idpersona';

    protected $allowedFields = ['cedulapersona','apellidospersona','nombrespersona','fechanacimientopersona', 'correopersona'];
}
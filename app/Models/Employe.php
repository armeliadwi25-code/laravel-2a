<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    //definisikan nama tabel
    protected $table = 'employes';

    //definisikan primary key
    protected $primaryKey = 'id';

    //tipe primary key
    protected $keyType = 'int';
}
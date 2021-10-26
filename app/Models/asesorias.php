<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class asesorias extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_asesorias';

    protected $table = 'asesorias';
}

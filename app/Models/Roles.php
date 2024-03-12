<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    use HasFactory;
    public $table="rolex";
    protected $primaryKey="rol_id";

    public $filiable = [
        'rol_descripcion'

    ];
    protected $cast=[
        'rol_descripcion'=>'string'
    ];
}

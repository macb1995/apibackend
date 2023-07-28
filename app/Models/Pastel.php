<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pastel extends Model
{
    use HasFactory;

    public $table = "pastels";
    protected $fillable = [
        'nombre',
        'descripcion',
        'creador',
        'f_creado',
        'f_vencimiento',
        'id'
    ];

    public function ingredientes(){
        return $this->belongsToMany(Ingrediente::class,"ingrediente_pastel");
    }
}

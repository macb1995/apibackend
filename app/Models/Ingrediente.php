<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingrediente extends Model
{
    use HasFactory;
    public $table = "ingredientes";
    protected $fillable = [
        'nombre',
        'descripcion',
        'f_ingreso',
        'f_vencimiento',
        'id'
    ];
    public function pastels(){
        return $this->belongsToMany(Pastel::class, "ingrediente_pastel");
    }

}
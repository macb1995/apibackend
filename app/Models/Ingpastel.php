<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingpastel extends Model
{
    use HasFactory;
    public $table = "ingrediente_pastel";
    protected $fillable = [
        'id',
        'pastel_id',
        'ingrediente_id'
    ];
    public function pastels(){
        return $this->belongsToMany(Pastel::class, "ingrediente_pastel");
    }

}

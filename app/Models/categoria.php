<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    use HasFactory;

    protected $table = 'categorias'; // Nombre de la tabla en la base de datos
    protected $primaryKey = 'id_categoria'; // Nombre de la clave primaria
    protected $fillable = ['descripcion']; // Campos que se pueden asignar masivamente

    public function producto(){
        //indicamos que la categoria tiene varios productos relacionados 
        return $this->hasMany("app\models\producto","id_categoria","id_categoria");
    }
}

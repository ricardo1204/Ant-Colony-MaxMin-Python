<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class pqr
 * @package App\Models
 * @version November 18, 2018, 6:50 am UTC
 *
 * @property string('nombre') nombre
 * @property string('apellido') apellido
 * @property string('cedula') cedula
 * @property string('correo') correo
 * @property string('direccion') direccion
 * @property string('telefono') telefono
 * @property string('motivo') motivo
 * @property string('description') description
 */
class pqr extends Model
{
    use SoftDeletes;

    public $table = 'pqrs';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'apellido',
        'cedula',
        'correo',
        'direccion',
        'telefono',
        'motivo',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'apellido' => 'required',
        'cedula' => 'numeric',
        'correo' => 'email',
        'direccion' => 'required',
        'telefono' => 'numeric',
        'motivo' => 'min:4',
        'description' => 'required'
    ];

    
}

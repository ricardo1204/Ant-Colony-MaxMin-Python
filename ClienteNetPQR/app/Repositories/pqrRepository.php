<?php

namespace App\Repositories;

use App\Models\pqr;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class pqrRepository
 * @package App\Repositories
 * @version November 18, 2018, 6:50 am UTC
 *
 * @method pqr findWithoutFail($id, $columns = ['*'])
 * @method pqr find($id, $columns = ['*'])
 * @method pqr first($columns = ['*'])
*/
class pqrRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Configure the Model
     **/
    public function model()
    {
        return pqr::class;
    }
}

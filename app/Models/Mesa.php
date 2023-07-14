<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Mesa
 *
 * @property $idMesa
 * @property $nombre
 * @property $estado
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Mesa extends Model
{
    
    static $rules = [
		'idMesa' => 'required',
		'nombre' => 'required',
		'estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idMesa','nombre','estado'];
    protected $primaryKey='idMesa';


}

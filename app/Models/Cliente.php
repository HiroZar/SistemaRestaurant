<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 *
 * @property $dni
 * @property $nombre
 * @property $apellido
 * @property $ruc
 * @property $razon_social
 * @property $created_at
 * @property $updated_at
 *
 * @property Comanda[] $comandas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cliente extends Model
{
    
    static $rules = [
		'dni' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['dni','nombre','apellido','ruc','razon_social'];
    protected $primaryKey='dni';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comandas()
    {
        return $this->hasMany('App\Models\Comanda', 'dni', 'dni');
    }
    

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Evento
 *
 * @property $id
 * @property $evento
 * @property $categoria
 * @property $titulo
 * @property $descripcion
 * @property $precio
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Evento extends Model
{
    
    static $rules = [
		'evento' => 'required',
		'categoria' => 'required',
		'titulo' => 'required',
		'descripcion' => 'required',
		'precio' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['evento','categoria','titulo','descripcion','precio'];



}

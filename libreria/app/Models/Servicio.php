<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Servicio
 *
 * @property $id
 * @property $titulo
 * @property $texto
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Servicio extends Model
{
    
    static $rules = [
		'titulo' => 'required',
		'texto' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['titulo','texto'];



}

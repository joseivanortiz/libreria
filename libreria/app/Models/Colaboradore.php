<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Colaboradore
 *
 * @property $id
 * @property $nombre
 * @property $cargo
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Colaboradore extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'cargo' => 'required',
    'Foto'  => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','cargo','Foto'];



}
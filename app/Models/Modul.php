<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Modul
 *
 * @property $id
 * @property $name
 * @property $hours
 * @property $description
 * @property $created_at
 * @property $updated_at
 *
 * @property Programacion[] $programacions
 * @property Uf[] $ufs
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Modul extends Model
{
    
    static $rules = [
		'name' => 'required',
		'hours' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','hours','description'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function programacions()
    {
        return $this->hasMany('App\Models\Programacion', 'modul_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ufs()
    {
        return $this->hasMany('App\Models\Uf', 'modul_id', 'id');
    }
    

}

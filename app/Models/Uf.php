<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Uf
 *
 * @property $id
 * @property $name
 * @property $hours
 * @property $modul_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Activitat[] $activitats
 * @property Modul $modul
 * @property Ra[] $ras
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Uf extends Model
{
    
    static $rules = [
		'name' => 'required',
		'hours' => 'required',
		'modul_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','hours','modul_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function activitats()
    {
        return $this->hasMany('App\Models\Activitat', 'uf_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function modul()
    {
        return $this->hasOne('App\Models\Modul', 'id', 'modul_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ras()
    {
        return $this->hasMany('App\Models\Ra', 'uf_id', 'id');
    }
    

}

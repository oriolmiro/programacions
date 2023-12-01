<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ra
 *
 * @property $id
 * @property $name
 * @property $uf_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Activitat[] $activitats
 * @property ActivitatRa[] $activitatRas
 * @property Contingut[] $continguts
 * @property Criteri[] $criteris
 * @property Uf $uf
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Ra extends Model
{
    
    static $rules = [
		'name' => 'required',
		'uf_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','uf_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function activitats()
    {
        return $this->hasMany('App\Models\Activitat', 'ra_ids', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function activitatRas()
    {
        return $this->hasMany('App\Models\ActivitatRa', 'ra_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function continguts()
    {
        return $this->hasMany('App\Models\Contingut', 'ra_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function criteris()
    {
        return $this->hasMany('App\Models\Criteri', 'ra_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function uf()
    {
        return $this->hasOne('App\Models\Uf', 'id', 'uf_id');
    }
    

}

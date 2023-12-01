<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Criteri
 *
 * @property $id
 * @property $criteri
 * @property $ra_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Activitat[] $activitats
 * @property ActivitatCriteri[] $activitatCriteris
 * @property Ra $ra
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Criteri extends Model
{
    
    static $rules = [
		'criteri' => 'required',
		'ra_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['criteri','ra_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function activitats()
    {
        return $this->hasMany('App\Models\Activitat', 'criteri_ids', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function activitatCriteris()
    {
        return $this->hasMany('App\Models\ActivitatCriteri', 'criteri_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ra()
    {
        return $this->hasOne('App\Models\Ra', 'id', 'ra_id');
    }
    

}

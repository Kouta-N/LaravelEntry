<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Type\Integer;

class Person extends Model
{

    public $timestamps = false;

    protected $guarded = array('id');

    public static $rules = array(
        'name' => 'required',
        'mail' => 'email',
        'age' => 'integer|min:0|max:150'
    );

    public function getData()
    {
        return $this->id . ': ' . $this->name . ' (' . $this->age . ')';
    }

    public function board()
    {
        return $this->hasOne('App\Models\Board');
    }

    // use HasFactory;

    // public function scopeNameEqual($query,$str)
    // {
    //     return $query->where('name', $str);
    // }

    // public function scopeAgeGreaterThan($query,$n)
    // {
    //     return $query->where('age','>=',$n);
    // }

    // public function scopeAgeLessThan($query,$n)
    // {
    //     return $query->where('age','<=',$n);
    // }

    // protected static function boot()
    // {
    //     parent::boot();

    //     static::addGlobalScope('age', function ($builder) {
    //         $builder->where('age', '>', 20);
    //     });
    // }
}
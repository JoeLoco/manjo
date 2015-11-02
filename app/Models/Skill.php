<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model {

    protected $table = 'skills';
    
    
    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
    
}
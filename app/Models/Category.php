<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

    protected $table = 'categories';
    
    
    public function skills()
    {
        return $this->hasMany('App\Models\Skill');
    }
    
}
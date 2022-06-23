<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    use HasFactory;
    protected $table='roles';
    protected $fillaable=['role','id'];
    protected $primaryKey='id';
    public $timestamps=false;
    public function user(){
        return $this->hasMany('App\Models\User','id');
    }
}

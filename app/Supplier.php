<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    //Table Supplier
    protected $table = 'supplier';
    protected $primaryKey = 'id_supplier';
    public function poduk()
    {
    	return $this->hasMany('App\Produk', 'id_supplier');
    }
}


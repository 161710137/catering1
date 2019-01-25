<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori_makanan extends Model
{
    protected $fillable = array('kategori_makanan');
    public $timestamps  =true;

    public function makanan()
    {
    	return $this->hasMany('App\makanan','id_kategori_makanan');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori_paket extends Model
{
    protected $fillable = array('kategori_paket', 'gambar');
    public $timestamps  =true;

    public function paket()
    {
    	return $this->hasMany('App\paket','id_kategori_paket');
    }
}

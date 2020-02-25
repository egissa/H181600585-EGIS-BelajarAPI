<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriBerita extends Model
{
    //
    protected $table='kategori_berita';

    protected $fillable=[
        'nama','users_id'
    ];

    public function artikels(){
        return $this->hasMany(\App\Artikel::class,'kategori_artikel_id','id');
    }

    public function user(){
        return $this->belongsTo(\App\User::class,'users_id','id');
    }
}

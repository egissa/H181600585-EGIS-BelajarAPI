<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BabDuaController extends Controller
{
    //Soal5
    //Tampilkan pengumuman yang dibuat oleh user yang membuat galeri dengan nama kategori yang diawali dengan AUT
    public function a5(){
        $pengumumans=Pengumuman::whereHas('user',function($query){
            $query->whereHas('galeris',function($query){
                $query->whereHas('KategoriGaleri',function($query){
                    $query->where('nama','like','Aut%');
                });
            });
        })->with('user.galers.KategoriGaleri')->get();

        return $pengumumans;
    }

    //Soal6
    //Tampilkan pengumuman yang dibuat oleh user yang membuat galeri dan juga berita
    public function a6(){
        $pengumumans=Pengumuman::whereHas('user',function($query){
            $query->whereHas('galeris')->whereHas('beritas');
        })->get();

        return $pengumumans;
    }
}

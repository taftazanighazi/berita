<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
	  public $table='beritas';

	 protected $primaryKey = 'id_berita';
	 protected $fillable = ['id_berita','id_kategori','judul','isi_berita'];
	 // public $timestamps=false;
}  

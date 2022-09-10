<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Model;
use App\Models\Produk;

class Kategori extends Model
{

	protected $table = "kategori";

	function Produk()
	{
		return $this->belongsTo(Produk::class, 'id_kategori');
	}

}

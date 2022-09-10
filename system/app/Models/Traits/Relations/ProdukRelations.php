<?php

namespace App\Models\Traits\Relations;
use App\Models\Traits\Relations;
use App\Models\Kategori;
use App\Models\Penjual;
use App\Models\User;

trait ProdukRelations {

	
	function Kategori()
	{
		return $this->belongsTo(Kategori::class, 'id_kategori');
	}

	function Penjual()
	{
		return $this->belongsTo(Penjual::class, 'id_penjual');
	}


}
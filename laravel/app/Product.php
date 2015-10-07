<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
Class Product extends Model{
	

	public function file() {
		return $this->belongsTo('App\File');
	}
}
<?php
class Presupuesto extends Eloquent {

	public function institucion() {
		return $this->belongsTo('Institucion');
	}

	public function gastos() {
		return $this->hasMany('Gasto');
	}
}
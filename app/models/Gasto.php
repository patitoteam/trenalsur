<?php
class Gasto extends Eloquent {

	public function presupuesto() {
		return $this->belongsTo('Presupuesto');
	}
}
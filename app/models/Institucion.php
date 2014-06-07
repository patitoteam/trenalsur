<?php
class Institucion extends Eloquent {
	
	public $table = 'instituciones';

	public function presupuestos() {
		return $this->hasMany('Presupuesto');
	}
}
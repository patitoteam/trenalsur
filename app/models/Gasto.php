<?php
class Gasto extends Eloquent {

	public function proyecto() {
		return $this->belongsTo('Proyecto');
	}
}

<?php
class Like extends Eloquent {
    public function proyecto() {
        return $this->belongsTo('Proyecto');
    }
}

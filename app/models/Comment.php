<?php
class Comment extends Eloquent {
    public function proyecto() {
        return $this->belongsTo('Proyecto');
    }
}

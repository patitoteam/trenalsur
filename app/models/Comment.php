<?php
class Comment extends Eloquent {
    public $table = 'comments';
    public function proyecto() {
        return $this->belongsTo('Proyecto');
    }
}

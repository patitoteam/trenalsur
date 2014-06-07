<?php
class Proyecto extends Eloquent {
    public function gastos() {
        return $this->hasMany('Gasto');
    }
    public function institucion() {
        return $this->belongsTo('Institucion');
    }
    public function likes() {
        return $this->hasMany('Like');
    }
    public function comments() {
        return $this->hasMany('Comment');
    }

    public function users() {
        return $this->belongsToMany('User');
    }
}

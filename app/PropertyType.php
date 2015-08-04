<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class PropertyType extends Model {

	//
    public function type()
    {
        return $this->belongsTo('App\PropertyType');
    }

}

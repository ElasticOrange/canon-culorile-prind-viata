<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model {

	protected $fillable = [
          'checkbox'
        , 'nume'
        , 'codcartus'
        , 'email'
        , 'telefon'
    ];

}

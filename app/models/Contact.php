<?php

class Contact extends Eloquent {

	protected $table = 'contacts';

	protected $fillable = array(
    'firstname', 
    'lastname'
  );

  public function contactdata()
  {
    return $this->hasMany('ContactData'); 
  }

}
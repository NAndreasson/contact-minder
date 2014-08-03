<?php

class Contact extends Eloquent {

	protected $table = 'contacts';

	protected $fillable = array('firstname', 'lastname');

}
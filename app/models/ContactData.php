<?php

class ContactData extends Eloquent {

  protected $table = 'contact_data';

  protected $fillable = array(
    'contact_id',
    'type',
    'value'
  );
  
}
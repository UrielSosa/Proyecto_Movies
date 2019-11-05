<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
  // public $table = "Actors";
  // public $primaryKey = "id";
  // public $timestamps = false;
  public $guarded = [];

  public function getNombreCompleto(){
      return $this->first_name . " " . $this->last_name;
  }

}

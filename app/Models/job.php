<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class job extends Model {
   use HasFactory;
  protected $table = 'job_listing';

  protected $guarded = [];
 
  public function employer(){
    return $this->belongsTo(employer::class);
  }

  //public function tags(){
  //  return $this->belongsToMany(Tag::class, $foreignPivotKey: "job_listing_id");
//  }
  
}
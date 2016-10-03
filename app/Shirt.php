<?php namespace App;
  
use Illuminate\Database\Eloquent\Model;

  
class Shirt extends Model
{
     protected $table = 'Shirts';
     protected $fillable = ['label', 'distribution', 'date'];
     
}
?>
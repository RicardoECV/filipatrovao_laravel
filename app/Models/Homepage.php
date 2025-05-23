<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homepage extends Model
{
  use HasFactory;  
  protected $table = 'home_page';  

  protected $fillable = ['title', 'header','img', 'text', 'editor_id'];
}

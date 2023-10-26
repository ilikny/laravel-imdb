<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Person;
use App\Models\Genre;


class Movie extends Model
{
  use HasFactory;

  use HasFactory;

  public function people()
  {
    $this->belongsToMany(Person::class);
  }

  public function genres()
  {
    $this->hasMany(Genre::class);
  }
}

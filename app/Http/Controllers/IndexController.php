<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class IndexController extends Controller
{
  public function index()
  {
    $topRated = Movie::query()
      ->orderby('rating', 'desc')
      ->limit(100)
      ->where('movie_type_id', 1)
      ->where('votes_nr', '>', '10000')
      ->paginate(15);


    return view('index', compact('topRated'));
  }
}

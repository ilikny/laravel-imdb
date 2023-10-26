@extends('layouts/main')

@section('content')

<ul>
@foreach ($topRated as $movie)

<li>{{ $movie->name }}</li>
    
@endforeach

</ul>
{{ $topRated->links() }}

@endsection
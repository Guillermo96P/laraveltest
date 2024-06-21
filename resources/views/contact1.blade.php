@extends('master')

@section('content')
<h1>Contact 1</h1>
<a href="{{ route('contact') }}">Contact</a>
<p>{{ $name }}</p>

@if($name != "Javier")
    Tu nombre no es Javier
@else
    Tu nombre es Javier
@endif

<ul>
@foreach ([1, 2, 3, 4, 5] as $item)
   <li>{{ $item }}</li>
@endforeach
</ul>
@endsection
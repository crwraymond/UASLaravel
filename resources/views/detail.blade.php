@extends('layouts.app')
@section('content')
<h2>{{$detail->title}}</h2>
<img src="{{Storage::url($detail->image)}}" style="width: 350px">
<p style="text-align: justify; width: 50%">&emsp;&emsp;&emsp;{{$detail->description}}</p>
@if(Auth::Check())
    @if(Auth::user()->role == "Admin")
        <a href="/home">Back</a>
        <a href="/deletedetail/{{$detail->id}}">Delete</a>
    @else
        <a href="/home">Back</a>
    @endif
@else
    <a href="/home">Back</a>
@endif
@endsection
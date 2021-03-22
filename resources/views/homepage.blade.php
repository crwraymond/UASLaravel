@extends('layouts.app')
@section('content')
<div class="flexbox">
    @foreach($type as $t)
        <div style="border:groove;width: 200px; ">
            <div ><p>{{$t->title}}</p></div>
            <div >{{$t->description}}...</div>
        </div>
    @endforeach
</div>
@endsection
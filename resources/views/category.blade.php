@extends('layouts.app')
@section('content')
<br>
<div class="flexbox">
    @foreach($detail as $t)
        <div style="width: 240px; ">
            <div ><p>{{$t->title}}</p></div>
            <div >{{substr($t->description, 0, 100)}} ...</div>
            <a href="detail/{{$t->id}}">Full Story</a>
        </div>
    @endforeach
</div>


@endsection
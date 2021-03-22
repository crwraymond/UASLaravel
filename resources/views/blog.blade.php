@extends('layouts.app')
@section('content')
<div style="margin-left: 45%">
    <br>
    <a href="/addblog" style="text-decoration: none; border-style: ridge; background: lightslategray; color: lightyellow">+ Create Blog</a>
    <br>
    
</div>
<br>
@if ($type=='[]')
<p style="text-align: center">You haven't write any article yet.</p>
    
@else
<table style="width:50%; margin-left: 25%;border: 1px solid #ddd;">
    <tr>
      <th>Title</th>
      <th>Action</th>
    </tr>
    @foreach ($type as $t)
    <tr>
        <td>{{$t->title}}</td>
        <td>
            <div class="card-body" style="text-align: center">
                <a href="/deletedetail/{{$t->id}}">Delete</a>
            </div>
        </td>
    </tr>
   @endforeach
</table>
@endif
@endsection
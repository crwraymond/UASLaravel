@extends('layouts.app')
@section('content')
<br>
@if ($type=='[]')
<p style="text-align: center">No user yet.</p>
    
@else
<table style="width:50%; margin-left: 25%;border: 1px solid #ddd;">
    <tr>
      <th>Name</th>
      <th>Email</th>
      <th>Action</th>
    </tr>
    @foreach ($type as $t)
    <tr>
        <td>{{$t->name}}</td>
        <td>{{$t->email}}</td>
        <td>
            <div class="card-body" style="text-align: center">
                <a href="/deleteuser/{{$t->id}}">Delete</a>
            </div>
        </td>
    </tr>
   @endforeach
</table>
@endif
@endsection
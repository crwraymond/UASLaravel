@extends('layouts.app')
@section('content')
<br>
<div style="margin-left: 40%">
    <div class="card-body">
        <form method="POST" action="/addblogstory" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <label for="Title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>
    
                <div class="col-md-6">
                    <input id="Title" type="text" class="form-control" name="Title" value="{{ old('Title') }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="category" class="col-md-4 col-form-label text-md-right">{{ __('Category') }}</label>
                <br>
                <select name="category" id="category" style="width: 165px">
                    @foreach ($type as $t)
                        <option value="{{$t->name}}">{{$t->name}}</option>
                    @endforeach
                </select>
                
            </div>
            <div class="form-group row">
                <label>File</label>
                <br>
                <input type="file" name="image" id="image">
            </div>
            <div class="form-group row">
                <label for="story" class="col-md-4 col-form-label text-md-right">{{ __('Story') }}</label>
    
                <div class="col-md-6" ></div>
                    <textarea style="height: 200px" id="story" type="text" class="form-control" name="story" value="{{ old('story') }}"></textarea>
                </div>
            </div>

    
            <div class="FormRegBtn">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        Create
                    </button>
                </div>
            </div>
        </form>
    </div>
    </div>


    
@endsection
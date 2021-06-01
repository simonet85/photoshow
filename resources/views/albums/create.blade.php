@extends('layouts.app')

@section('content')
    <h3>Create Albums</h3>

    {!!Form::open(['action'=>'AlbumController@store','enctype'=>'multipart/form-data','method'=>'POST'])!!}

    {{Form::text('name','',['placeholder'=>'Album Name'])}}
    {{Form::textarea('description','',['placeholder'=>'Album description'])}}
    {{Form::file('cover_image')}}

    {!!Form::submit('submit')!!}

    {!!Form::close()!!}
@endsection
@extends('layouts.app')

@section('content')
    <h1>Update Writer </h1>
    {!! Form::open(['action' => ['WriterController@update',$writer->id] , 'method' => 'post']) !!}
        <div class="form-group">
            {{Form::label('', 'Name')}}
            {{Form::text('name',$writer->name,['class' => "form-control" ])}}
        </div>
        <div class="form-group">
            {{Form::label('', 'Image')}}
            <img src={{$writer->avatar}} alt="avatar_image">
            {{ Form::file('avatar', []) }}
            
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('update' ,['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection

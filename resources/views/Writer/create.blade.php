@extends('layouts.app')

@section('content')
    <h1>Add Post </h1>
    {!! Form::open(['action' => 'WriterController@store' , 'method' => 'post']) !!}
        <div class="form-group">
            {{Form::label('', 'Writer Name')}}
            {{Form::text('name','',['class' => "form-control" , 'placeholder' =>'Writer Name...'])}}
        </div>
        <div class="form-group">
                {{Form::label('', 'Image')}}
                {{Form::file('avatar', []) }}                
            </div>  
        {{Form::submit('Add' ,['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection

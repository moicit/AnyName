@extends('layouts.app')

@section('content')
    <h1>Add Post </h1>
    
    {!! Form::open(['action' => 'PostController@store' , 'method' => 'post']) !!}
        <div class="form-group">
            {{Form::label('', 'Writer Name')}}
            {{Form::text('name','',['class' => "form-control" , 'placeholder' =>'Name..'])}}
        </div>
        <div class="form-group">
            {{Form::label('', 'Image')}}
            {{Form::file('avatar',['class' => "form-control" ])}}
        </div>
       
        <div class="form-group">
            {{Form::label('', 'Title')}}
            {{Form::text('title','',['class' => "form-control" , 'placeholder' =>'Title'])}}
        </div>
        <div class="form-group">
                {{Form::label('', 'Tag')}}
                {{Form::text('tag','',['class' => "form-control" , 'placeholder' =>'Tag'])}}
            </div>
           
        <div class="form-group">
                {{Form::label('', 'Body')}}
                {{Form::textarea('body','',['id'=>'summary-ckeditor','class' => "form-control" , 'placeholder' =>'Body'])}}
        </div>  
        
        
        {{Form::submit('Add' ,['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection

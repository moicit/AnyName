@extends('layouts.app')

@section('content')
    <h1>Update Post </h1>
    {!! Form::open([]) !!}
        <div class="form-group">
            {{Form::label('', 'Name')}}
            {{Form::text('name',$writer->name,['class' => "form-control" ])}}
        </div>
        <div class="form-group">
            {{Form::label('', 'Image')}}
            <img src={{$writer->avatar}} alt="avatar_image">
            {{ Form::file('avatar', []) }}
            
        </div>
        <div class="form-group">
            {{Form::label('', 'Title')}}
            {{Form::text('title',$post->title,['class' => "form-control" ])}}
        </div>
        <div class="form-group">
            {{Form::label('', 'Tag')}}
            {{Form::text('tag',$post->tag,['class' => "form-control" ])}}
        </div>
        <div class="form-group">
            {{Form::label('', 'Body')}}
            {{Form::textarea('body',$post->s_body.$post->r_body,['id'=>'summary-ckeditor','class' => "form-control" ])}}
        </div>
    {!! Form::close() !!}
@endsection

@extends('layouts.app')

@section('content')
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="well">
                <h3><a href="post/{{$post->id}}">
                    {{$post->title}} </a></h3>
                <div class="well">
                    <p>{!!$post->body!!}</p>
                </div>
            <small>Writted in {{$post->created_at}}  by {{   $post->writer->name}}</small>
                @if(!Auth::guest())
                    <a href="post/{{$post->id}}/edit" class = "pull-right btn btn-primary">update</a>
                    {!!Form::open(['action'=>['PostController@destroy',$post->id] , 'method'=>'post','class'=>'pull-right' ]) !!}
                    {!!Form::hidden('_method', 'delete')!!}
                    {!!Form::submit('Delete',['class'=>" btn btn-danger"])!!}
                    {!!Form::close()!!}
                    
                @endif
            </div>
        @endforeach
    @else
            <h1> There is no posts</h1>
    @endif
@endsection

@extends('layouts.app')

@section('content')
    @if(count($writers) > 0)
        @foreach($writers as $writer)
            <div class="well">
                <h3><a href="writer/{{$writer->id}}">
                    {{$writer->name}} </a></h3>
               
            <small>Writted in {{$writer->created_at}}  </small>
                @if(!Auth::guest())
                    <a href="writer/{{$writer->id}}/edit" class = "pull-right btn btn-primary">update</a>
                    {!!Form::open(['action'=>['WriterController@destroy',$writer->id] , 'method'=>'post','class'=>'pull-right' ]) !!}
                    {!!Form::hidden('_method', 'delete')!!}
                    {!!Form::submit('Delete',['class'=>" btn btn-danger"])!!}
                    {!!Form::close()!!}
                    
                @endif
            </div>
        @endforeach
    @else
            <h1> There is no writers</h1>
    @endif
@endsection

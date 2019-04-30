@extends('layouts.app')

@section('content')
    <div class="well" style="width:80%; margin:0 auto;">
        <div class="card">
            <div class="card-body">
                <h1 style="float:left;">{{$post->title}}</h1>

                @if(!Auth::guest())
                    @if(Auth::user()->id == $post->user_id)

                        {!!Form::open(['action'=> ['PostsController@destroy', $post->id], 'method' => 'POST', 'style' => 'float:right'])!!}
                            {{Form::hidden('_method', 'DELETE')}}
                            {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
                        {!!Form::close()!!}

                        <a href="/posts/{{$post->id}}/edit" class="btn btn-default" style="float:right;">Edit</a>
                    @endif
                @endif
                <br><br><br>
                <small>Written on {{$post->created_at}}  by {{$post->user->name}}</small>
                <hr>
                <div>
                    <h3>{{$post->body}}</h3>
                </div>
            </div>
        </div>
    </div>
@endsection
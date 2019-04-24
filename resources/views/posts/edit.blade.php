@extends('Layouts.app')

@section('content')
    <div class="card" style="width:80%; margin:0 auto;">
        <div class="card-body">
            <h1>Edit Post</h1>
            {!!Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST']) !!}
                <div class = "form-group">
                    {!!Form::label('title', 'Title') !!}
                    {!!Form::text('title', $post->title, ['class' => 'form-control']) !!}
                </div>

                <div class = "form-group">
                    {!!Form::label('body', 'Body') !!}
                    {!!Form::textarea('body',  $post->body, ['class' => 'form-control']) !!}
                </div>

                {!!Form::hidden('_method', 'PUT') !!}
                {!!Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
            {!!Form::close() !!}
        </div>
    </div>
@endsection
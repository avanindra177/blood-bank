@extends('Layouts.app')

@section('content')
    <div class="card" style="width:80%; margin:0 auto;">
        <div class="card-body">
            <h1>Create Post</h1>
            {!!Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
                <div class = "form-group">
                    {!!Form::label('title', 'Title') !!}
                    {!!Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'title']) !!}
                </div>

                <div class = "form-group">
                    {!!Form::label('body', 'Body') !!}
                    {!!Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Body']) !!}
                </div>

                {!!Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
            {!!Form::close() !!}
        </div>
    </div>
@endsection
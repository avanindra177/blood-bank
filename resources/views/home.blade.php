@extends('layouts.app')

@section('content')
  <div class="container">

    <main role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="container">
          <h1 class="display-3">Events</h1>
          <p>You can manage or look into the events. </p>
          <p><a class="btn btn-primary btn-lg" href="#" role="button">Events &raquo;</a></p>
        </div>
      </div>

      <div class="container">
        <!-- Post section -->
        <div class="card">
          <div class="card-body">
            <h1 style="float:left;">Post</h1>
              <a href="/posts/create" class="btn btn-primary" style="float:right;">Create Post</a>
          </div>
        </div>  

        <!-- Check if there are posts -->
        @if(count($posts) > 0)
          @foreach($posts as $post)
            <div class= "card" style="margin-top:5px;">
              <div class="card-body">
                <h3 class="card-title" style="float:left;"><a href="/posts/{{$post->id}}"> {{$post->title}}</a></h3>

                @if (!Auth::guest())
                  @if(Auth::user()->id == $post->user_id)
                    {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right', 'style' => 'float:right']) !!}
                      {{Form::hidden('_method', 'DELETE') }}
                      {{Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                    {!!Form::close() !!}
                    <a href="/posts/{{$post->id}}/edit" class="btn btn-default" style="float:right;">Edit</a>
                  @endif
                @endif

                <br><br>
                <small>On {{$post->created_at}} by {{$post->user->name}}</small>
              </div>
            </div>
          @endforeach
          {{$posts->links()}}
        @else
          <p>No posts.</p>
        @endif

      </div> <!-- /container -->

    </main>
  </div>
@endsection

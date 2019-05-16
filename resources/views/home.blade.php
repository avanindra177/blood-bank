@extends('layouts.app')

@section('content')
  <div class="container">

    <main role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <!-- <div class="jumbotron"  style="background-image: url('images/blood1.jpg'); background-repeat: no-repeat; width:100%; height:100%; background-size:cover; background-position: center;">
        <div class="container">
          <h1 class="display-3">Blood Centers</h1>
          <p>  </p>
          <p><a class="btn btn-primary btn-lg" href="#" role="button">Events &raquo;</a></p>
        </div>
      </div> -->

      <!-- Jumbotron -->
        <div class="jumbotron p-0">

          <!-- Card image -->
          <div class="view overlay rounded-top">
            <img src="{{ asset('images/blood3.jpeg') }}" class="img-fluid" alt="Sample image">
            <a href="#">
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>

          <!-- Card content -->
          <div class="card-body text-center mb-3">

            <!-- Title -->
            <h2 class="card-title h3 my-4"><strong>Blood Centers</strong></h2>
            <!-- Text -->
            <p class="card-text py-2">A single pint can save three lives, a single gesture can create a million smiles</p>
            <!-- Button -->
            <p><a class="btn btn-primary btn-lg" href="{{ url('/center') }}" role="button">Blood Centers &raquo;</a></p>

          </div>

        </div>
        <!-- Jumbotron -->

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
                <h3 class="card-title" style="float:left;"><a href="/posts/{{$post->id}}"> {{$post->user->name}}</a></h3>

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

                <hr>
                <h5 class="card-title"> {{$post->title}} </h5><br>
                <p class="card-text">{{$post->body}}</p>
                <small>On {{$post->created_at}}</small>
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

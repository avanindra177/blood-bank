@extends('Layouts.app')

@section('content')
    <div class ="container">
        <div class="row">
            <div class = "col-md-8 col-md-offset-2"  style="margin:0 auto;">
                <div class= "panel panel-default">
                    <div class = "panel-heading" style="height:70px">
                        <h1 style="float:left;">Dashboard </h1>
                        <a href="/posts/create" class = "btn btn-primary" style="float:right;">Create Post</a>
                    </div>
                    <br>

                    <div class="panel-body">
                        <h3>Your Posts</h3>
                        @if(count($posts) > 0)
                            <table class="table table-striped">
                                <tr>
                                    <th>Title</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                @foreach($posts as $post)
                                    <tr>
                                        <td>{{$post->title}}</td>
                                        <td><a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a></td>
                                        <td>
                                            {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                                {{Form::hidden('_method', 'DELETE')}}
                                                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                            {!!Form::close()!!}
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                         @else
                            <p>You have no posts</p>
                         @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection 
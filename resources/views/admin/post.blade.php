@extends('layouts.admins')

@section('content')

<div class="panel panel-default">
        <div class="panel-heading"><i class="fa fa-group"></i> User's Post</div>
        <div class="panel-body">
            
        <table class="table">
            <tr>
            <th>User</th>
            <th>Title</th>
            <th>Body</th>
            <th>Created At</th>
            <th>Actions</th>
            </tr>

            @foreach($posts as $post)
                <tr>
                    <td>{{ $post->user->name }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->body }}</td>
                    <td>{{ $post->created_at }}</td>

                    <td> 
                        <a href="{{ url('admin/post/edit/'.$post->id) }}" class="btn btn-default"><i class="fa fa-edit"></i> Edit</a> 
                        <a href="{{ url('admin/delete/post/'.$post->id) }}" class="btn btn-default"><i class="fa fa-trash"></i> Delete</a> 
                    </td>
                </tr>
            @endforeach
        </table>


        {{ $posts->render() }}

        </div>
    </div>

@stop
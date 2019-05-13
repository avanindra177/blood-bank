@extends('layouts.admins')

@section('content')
 

    <div class="panel panel-default">
        <div class="panel-heading"><i class="fa fa-ticket"></i> Edit Post</div>

        <div class="panel-body">
        

            <form action="{{ url('admin/post/edit/'.$post->id) }}" method="POST">
                {{ csrf_field() }}


                <div class="form-group">
                    Title                 
                    <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $post->title }}">
                </div>



                <div class="form-group">
                    Body                 
                    <input type="text" name="body" class="form-control" placeholder="Body" value="{{ $post->body }}">
                </div>


        
                <div class="form-group">
                    <input type="submit" class="btn btn-default"  value="Submit">
                </div>

            </form>
        </div>
    
    </div>
@stop
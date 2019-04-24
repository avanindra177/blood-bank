@extends('Layouts.app')

@section('content')
    <div class ="container">
        <div class="row">
            <div class = "col-md-8 col-md-offset-2">
                <div class= "panel panel-default">
                    <div class = "panel-heading">
                        <h1 style="float:left;">Dashboard </h1>
                        <a href="/posts/create" class = "btn btn-primary" style="float:right;">Create Post</a>
                    </div>
                    <br><br><br>
                    <div class= "panel-body">
                        <h2>Your Post</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection 
@extends('Layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-3">

                <form method="GET" action="/donors">
                    <!-- <div class="form-group"> -->
 	                    <select name="group" class="form-control">
                            <option value ="A+">A+</option>
                            <option value ="A-">A-</option>
                            <option value ="B+">B+</option>
                            <option value ="B-">B-</option>
                            <option value ="O+">O+</option>
                            <option value ="O-">O-</option>
                            <option value ="AB+">AB+</option>
                            <option value ="AB-">AB-</option>
                        </select>
                        <!-- <input type="search" name="group" class="form-control" placeholder="A+"> -->
                        <!-- <input type="text" name="group" class="form-control" placeholder="Blood group"> -->
                        <input type="submit" class="btn btn-default btn-info" value="Search">
                        </form>
                    </div>
                    
            </div>

            <!-- <div class="col-md-3">
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-btn">
                            <input type="submit" class="btn btn-default btn-info" value="Search">
                        </span>
                    </div>     
                </div>
                </form>
            </div> -->
        </div>
    </div>


    <div class="row" style="margin:0 auto;">
        @foreach($users as $user)
        
            <div class="col-md-4">

                <div class="thumbnail">
                    <div class="caption">
                        <h3><a href="{{ url('donor/'.$user->id) }}"> {{ ucfirst($user->name) }} </a> 
                        </h3>

                        <ul class="list-group">
                            <li class="list-group-item">Blood Group : {{ $user->blood }}ve </li>
                            <li class="list-group-item">City : {{ $user->city }}</li>
                            <li class="list-group-item">Address : {{ $user->address }}</li>
                            <li class="list-group-item">Mobile : {{ $user->phone }}</li>
                            <li class="list-group-item">Email : {{ $user->email }}</li>
                            <li class="list-group-item">Last Donated : {{  date('F d, Y h:m A', strtotime($user->last_donated)) }}</li> 
                        </ul>
                    </div>
                </div>
            </div>
    
        @endforeach
    </div>

    @if (count($users) == 0)
        <div class="alert alert-info">Sorry !! Currently there is no donors matching your result.</div>
    @endif

    {{ $users->render() }}
    </div>
@stop
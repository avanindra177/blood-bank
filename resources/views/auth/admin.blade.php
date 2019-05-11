@extends('Layouts.admins')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Admin Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Welcome to Blood Bank! <strong>ADMIN</strong>
                </div>
            </div>
        </div>
    </div>
</div> -->

    <div class="panel panel-default">
        <div class="panel-heading"><i class="fa fa-group"></i> Users</div>
        <div class="panel-body">
            
        <table class="table">
            <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Joined</th>
            <th>Last Login</th>
            <th>Donor</th>
            <th>Actions</th>
            </tr>

            @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{  date('F d, Y h:m A', strtotime($user->created_at)) }}</td>
                    <td>{{  date('F d, Y h:m A', strtotime($user->updated_at)) }}</td>
                    
                    <td>@if ( $user->is_donor == 1 )
                            Yes
                        @else 
                            No
                         @endif
                    </td>

                    <!-- <td> 
                        <a href="{{ url('admin/user/edit/'.$user->id) }}" class="btn btn-default"><i class="fa fa-edit"></i> Edit</a> 
                        <a href="{{ url('admin/delete/user/'.$user->id) }}" class="btn btn-default"><i class="fa fa-trash"></i> Delete</a> 
                    </td> -->
                </tr>
            @endforeach
        </table>


        {{ $users->render() }}

        </div>
    </div>

@stop
